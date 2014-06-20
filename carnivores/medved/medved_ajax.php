<?php
	if (isset($_GET['q'])){
		$query = $_GET['q'];
		$domain = explode(",", $query);
		$result = [];
		$dig_result = explode("\n" ,  shell_exec('host -t ns '. $domain[0] . '| cut -d " " -f 4 | grep -v "NXDOMAIN" ') );
		$now =  time();
		$path = "/var/www/carnivores/medved/archive/";
		foreach ($dig_result as $key => $pre_nsserver){

			// CUTTING LAST DOT
			$pre_nsserver_length = strlen($pre_nsserver);

			$nsserver = "";
			if ( $pre_nsserver_length > 2 ){
				$nsserver = substr( $pre_nsserver, 0, $pre_nsserver_length-1);
			}

			// CATCHING ZONE DATA
			if ( strlen($nsserver) > 3 && strrpos($nsserver, ".") ){
				//$zone_data=shell_exec('dig axfr '.$domain[0].' @'.$nsserver . ' 2>&1 ');
				$zone_data=shell_exec('dig axfr +nocmd +nostats '.$domain[0].' @'.$nsserver . ' 2>&1 ');
				$archive = 1;
				if ( strlen(strstr($zone_data, 'ransfer failed')) ){
					$zone_data = "TRANSFER FAILED";
					$archive = 0;
				}
				if ( strlen(strstr($zone_data, 'connection timed out')) || strlen(strstr($zone_data, 'host unreachable')) || strlen(strstr($zone_data, 'network unreachable')) || strlen(strstr($zone_data, 'connection refused')) || strlen(strstr($zone_data, 'connection reset')) || strlen(strstr($zone_data, 'communications error'))){ 
					$zone_data = "SERVER UNREACHABLE";
					$archive = 0;
				}
				if ( strlen(strstr($zone_data, 'SERVFAIL')) ){
					$zone_data = "SERVER FAIL";
					$archive = 0;
				}
				if ( strlen(strstr($zone_data, 'couldn\'t get address')) ){
					$zone_data = "SERVER ADDRESS NOT FOUND";
					$archive = 0;
				}
				$tmp = [];
				$tmp["domain"] = $domain[0];
				$tmp["name"] = $nsserver;
				$tmp["data"] = $zone_data;
				$result[] = $tmp;
				if ( $archive == 1){
					$file = $path . $now . "_" . $domain[0] . ".txt";
					file_put_contents($file, date( "Y/m/d H:i:s ", $now). $domain[0] . " @ " . $nsserver . "\n\n" . $zone_data, FILE_APPEND | LOCK_EX);
				}
			}
		}
		echo json_encode($result);
	}
	if (isset($_GET['archive']) ){
		
		date_default_timezone_set('Europe/Warsaw');
		$path = 'archive/';
		$results = [];
		$list = explode("\n",shell_exec('ls -1 archive/*'));
		foreach ($list as $key => $value){
			$head = explode("@", shell_exec('head -1 '. $value) );
			$number_of_records = shell_exec('cat '. $value . '| wc -l');
			$line = explode("/", $value);
			$full_filename = explode("_", $line[1]);
			$domain = explode(".", $full_filename[1]);
			$f_arr = [];
			foreach ($domain as $k => $v){
					if ( $v != "txt"){
						$f_arr[] = $v;
					}
			}

			$domain = implode(".", $f_arr);

			if ( isset($_GET['archive']) && strlen($_GET['archive']) > 3 ){
				if ($domain == $_GET['archive']){
					$tmp['server'] = trim($head[1]);
					$tmp['number_of_records'] = trim($number_of_records);
					$tmp['line'] = $line;
					$tmp['url'] = $value;
					$tmp['full_filename'] = $full_filename[1];
					$tmp['timestamp'] = $full_filename[0];
					$tmp['date'] = date( "Y/m/d H:i:s" , $full_filename[0] );
					$tmp['filename_arr'] = $f_arr;
					$tmp['domain'] = $domain;
					$results[] = $tmp;
				}
			}
			else {
				$tmp['server'] = trim($head[1]);
				$tmp['number_of_records'] = trim($number_of_records);
				$tmp['line'] = $line;
				$tmp['url'] = $value;
				$tmp['full_filename'] = $full_filename[1];
				$tmp['timestamp'] = $full_filename[0];
				$tmp['date'] = date( "Y/m/d H:i:s" , $full_filename[0] );
				$tmp['filename_arr'] = $f_arr;
				$tmp['domain'] = $domain;
				$results[] = $tmp;
			}

			
		}
		echo json_encode($results);
	}
	
?>
