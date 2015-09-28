<?php
if(isset($_POST["send-request"])){
							function Uploading($files){
								move_uploaded_file($files['tmp_name'], '../../videos/'.$files['name']); 
								$f = $files['name'];
								$s = $_POST['section'];
								$query="INSERT INTO videos VALUES(NULL,'".$f."','".$s."')";
								mysql_query( $query ) or die(mysql_error());
							}
							Uploading($_FILES['file']);	
					}
					$result = mysql_query("SELECT * FROM videos") or die(mysql_error());
					$data = mysql_fetch_array($result);
					if($data>0){
						do{
							printf('
									<video height="400" width="600" controls="controls" poster="../image/cinema_poster.jpg">
										<source src="../../videos/%s">
									</video><br>',$data["name"]);
								}while($data = mysql_fetch_array($result));
					}		
					echo '<div id="video_form" style="display:none;"><center><br><br><form method="POST" action="" enctype="multipart/form-data"><table><fieldset>
									<tr><td><input type="file" name="file" multiple accept="video/*" required/></td></tr>
									<tr><td><input type="text" name="section" placeholder="| Section" required/></td></tr>
									<tr><td><input type="submit" name="send-request" value="Upload" /></td></tr>
								  </table></fieldset></form></center></div>
								  <center><br><br><button onClick="HideShow(\'video_form\')">Add new video</button></center>';
?>