<?php 
	
	function load_tools_page(){
			
			$url = esc_url( $_POST[ 'cached_url' ] );
			
			$post_parts = parse_url( $url );
			$post_uri   = $post_parts['path'];
			if ( ! empty( $post_parts['query'] ) )
				$post_uri .= "?" . $post_parts['query'];
			$path = $post_uri;
			// SW/CFTP: Ensure the path at least contains a slash
			if ( ! $path )
				$path = '/';
			// Hostname appears to be required without the protocol prefix, e.g.
			// no 'http://'.
			$hostname = $post_parts[ 'host' ];
			
	        // Purge Varnish cache.
	        if ( WPE_CLUSTER_TYPE == "pod" )
	            $wpe_varnish_servers = array( "localhost" );
	        else if ( ! isset( $wpe_varnish_servers ) ) {
	            if ( WPE_CLUSTER_TYPE == "pod" )
	                $lbmaster            = "localhost";
	            else if ( ! defined( 'WPE_CLUSTER_ID' ) || ! WPE_CLUSTER_ID )
	                $lbmaster            = "lbmaster";
	            else if ( WPE_CLUSTER_ID >= 4 )
	                $lbmaster            = "localhost"; // so the current user sees the purge
	            else
	                $lbmaster            = "lbmaster-" . WPE_CLUSTER_ID;
	            $wpe_varnish_servers = array( $lbmaster );
	        }
			// SW/CFTP: Assume we're not using EC…
			foreach ( $wpe_varnish_servers as $varnish ) {
				error_log( "CFTP: PURGE, $varnish, 9002, $hostname, $path, array( ), 0" );
				WpeCommon::http_request_async( "PURGE", $varnish, 9002, $hostname, $path, array( ), 0 );
			}
			
			$this->set_admin_notice( "Issued a cache clearance for <var>$url</var>" );
			wp_redirect( admin_url( '/tools.php?page=cftp_clear_url' ) );
			exit;
   }
	
 