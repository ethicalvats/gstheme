
<?php
       

       function write_vars(){
				
					$color=ffffff;

				   	$myFile = 'styles/_var.scss';

					$fh = fopen($myFile, 'w') or die("can't open file");

					$color = '$brandColor : #'.$_POST['color'].';';
					
					fwrite($fh, $color);
					
					fclose($fh);

				}	

			write_vars();
		
		       
		      	

			function write_file(){

		        	// header("Content-Type: text/css");
			        require_once('sass/SassParser.php');    //including Sass libary (Syntactically Awesome Stylesheets)
			        $sass = new SassParser(array('style'=>'nested'));
			        $css = $sass->toCss('styles/sassCSS.scss');

		        	$myFile2 = 'styles/style.css';
					$fh2 = fopen($myFile2, 'w') or die("can't open file");
					
					fwrite($fh2, $css);
					
					fclose($fh2);

	        }	

	        write_file();


?>