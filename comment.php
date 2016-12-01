
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cook";

$conn = new mysqli($servername, $username, $password, $dbname);
?>


		<div id="contact_form" class="rapid_contact"> 

				<!-- nerni section end bolv -->
				
				<?php
				if(!empty($_POST['submit']))
				{
					$name = trim($_POST ['rp_name']);
					$email = trim($_POST['rp_email']);
					$content = trim($_POST['rp_message']);

					$insert = "INSERT INTO `comment` (`name`, `email`, `content`) VALUES ('".$name."', '".$email."', '".$content."');";
					if($conn->query($insert))
					{
						echo '<span style="padding: 20px; color:green;">Таны хүсэлтийг хүлээн авлаа.</span>';				
					}
					else
					{
						echo '<span style="padding: 20px; color:red;">Таны оролдлого амжилтгүй боллоо. Дахин оролдлого хийнэ үү!</span>';
					}
					

				}
					
			
				?>

				<form action="" method="POST" class="">
					<div class="control-group">
						<label class="control-label" > <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Таны нэр:</b></label>

						<div class="controls">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	<input class=" inputbox input-xlarge" type="text" placeholder="Таны нэр:" name="rp_name" id="rp_name" value="" />
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="rp_email">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;И-Мэйл:</label>
						<div class="controls">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class=" inputbox input-xlarge"  type="text" placeholder="И-Мэйл:" name="rp_email" id="rp_email" value="" required="required" />
						</div>
					</div>	


					<div class="control-group">
						<label class="control-label" for="rp_message">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Message:</label>
					<div class="controls">
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<textarea  placeholder="Message:" name="rp_message" id="rp_message" required="required" rows='5' cols='30'></textarea>
						</div>
					</div>

					<div class="control-group">
						<div class="controls">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;		<input class=" btn " id="submit-form" type="submit" name="submit" value="Илгээх" /> <br><br>
						</div>
					</div>
					<!-- end control group -->
				</form>	

				<div class="contact-list">
					<ul>
						<?php
							// Check connection
							if ($conn->connect_error) {
							     die(" Холболт буруу байна. " . $conn->connect_error);
							} 

							$sql = "SELECT id, name, email, content FROM comment";
										
							$result = $conn->query($sql);
									
							if ($result->num_rows > 0) {							     
							     // output data of each row

			 					while($row = $result->fetch_assoc()) {
							        echo '<li>';
							        echo $row["content"];
							        echo '</li>';
							    }
							} 
							else
							{
								echo '<li>';
							    echo "0 results";
							    echo '</li>';
							}					
						?> 
					</ul>
				</div>			
		</div>
	</div>	
</body>