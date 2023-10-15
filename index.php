<!DOCTYPE html>
<html lang="en">

<head>
    <title>The unexpected Journal</title>
    <meta name="Author" content="Alejandra Hernandez">
    <meta name="Description" content="Assigment 1, Pizzeria order page">
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/Style.css" />

</head>

<body>
    <header>
        <h1>The Unexpcted Journal</h1>
        <h2>Let's Start</h2>
        
    </header>
    <br>
    <main>
        <!-- her it stats to save and get the info provided by the user -->
        <form id="order_info" action="COMFIRM.php" method="post">
            <!-- Interests List -->
                <h3>Step 1: Select Your interests</h3>
            <section>
                <label for="interest">choose your first toping</label>
                <select id="interest" name="interest" required>
                    <option value="choose">choose…</option>
                    <option value="Science">Science</option>
                    <option value="Movies and Shows">Movies and Shows</option>
                    <option value="Art">Art</option>
                    <option value="Music">Music</option>
                    <option value="Literature">Literature</option>
                    <option value="Politics">Politics</option>
                    <option value="Philosophy">Philosophy</option>
                    <option value="Food">Food</option>
                    <option value="History">History</option>
                    <option value="Cartoon and Animation">Cartoon and Animation</option>
                    <option value="Technology">Technology</option>
                    <option value="Fashion">Fashion</option>
                    <option value="Economics">Econimics</option>
                </select>
            </section>
            <br>
            <br>
            <br>

            <!-- personal info:name, adress, phone etc -->

            <h3>Step 2: Place your Order</h3>

            <fieldset>
                <legend>Personal Information</legend>

                <section>
                <div>
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" id="fname" required size="25" maxlength="255"
                        placeholder="First Name" />
                </div>
                <div>
                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" id="lname" required size="25" maxlength="255"
                        placeholder="Last Name" />
                </div>

                <div>
                    <label for="email">Email </label>
                    <input type="text" id="email" name="email" required />
                </div>
                <div>
                    <label for="phone_num">Phone</label>
                    <input type="tel" id="phone_num" name="phone_num" maxlength="10" />
                </div>

                <div>
                    <legend>Payment method</legend>
                    <input type="checkbox" name="paymeth[]" id="paymeth" value="cash" />
                    <label for="add1">Cash</label>
                    <input type="checkbox" name="paymeth[]" id="paymeth" value="card" />
                    <label for="add2">Credit Card</label>

                </div>

            </section>
            </fieldset>
            </div>
            <button type="submit">Submit</button>
            <button type="reset">reset</button>
        </form>
        <br>
        <br>

        <br>
        <br>
    </main>
    <footer>
        <p>*****************************************************</p>
        <nav>
            <!-- link to privacy policy page -->
            <a href="php/privacypol.php" title="read our private policy">Privacy Policy and Terms and Conditions</a>|
        </nav>
        <p><small>The unexpected Journal.</small></p>
        <p><small>©Unexpected Journal</small></p>
    </footer>

<div class="form-group submit-message">
    <?php
					 	include_once ('validate.php');
                        include_once ('database.php');
                        // create our class objects
                        $valid = new validate();
						
						if(!empty($_POST['submit'])){
							$fname = $_POST['fname'];
							$lname = $_POST['lname'];
							$email = $_POST['email'];
                            $phone_num = $_POST['phone_num'];
                            $interest = $_POST['interest'];

                            $msg = $valid->checkEmpty($_POST, array('fname', 'lname', 'email', 'phone_num', 'interest'));
                            $checkEmail = $valid->validEmail($_POST['email']);
                            // now handle any empty fields
                            if($msg != null){
                            echo $msg;
                            //link to the previous page
                            echo "<a href='javascript:self.history.back();'>Go Back</a>";
                            }
                            elseif(!$checkEmail){
                            echo '<p>Please provide a valid email.</p>';
                            echo "<a href='javascript:self.history.back();'>Go Back</a>";
                            }else{
                            // if all the fields are valid
                            $result = $database->execute("INSERT INTO costumers(fname, lname, email, phone_num, interest) VALUES('$fname', '$lname', '$email', '$phone_num', '$interest')");
                            // let the user know that the record has been added
                            if($result){
                                echo "<p>Data added successfully.</p>";
                                echo "<a href='view.php'>View Result</a>";
                            }else{
								echo "<p>Failed to insert data</p>";
							}
               
                            }
							
						}
					 
    ?>
</div>
</section>
</main>
</body>

</html>