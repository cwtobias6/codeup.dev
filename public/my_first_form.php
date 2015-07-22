
<?php
  var_dump($_GET);
  var_dump($_POST);
?>



<!DOCTYPE html>
	<html>
		<head>
			<title>My First HTML Form</title>
		</head>	

		<body>
			<form method="GET" action="/my_first_form.php">
    			<p>
        			<label for="name">Username</label>
        			<input id="username" name="username" type="text" placeholder="Enter Username" autofocus>
    			</p>
    			<p>
        			<label for="password">Password</label>
        			<input id="password" name="password" type="password" placeholder="Enter Password" autofocus>
    			</p>
    			<p>
        			<button type="submit" name="username" value= "Login">Login</button>
    			</p>
			</form>

        <section>
            <form method= "POST">
                <input type="text" placeholder="Type your name!">
                <input type="checkbox" id="mailing_list" name="mailing_list" value="yes">
                <label for="mailing_list">Sign me up for the mailing list!</label>
                <button type="submit" value="HIT ME!" name= "mailing list">HIT ME</button>

            </form>

        </section>

        <section>
<!-- to, from, subject, body, and a send button) -->
                <h1>Compose an E-Mail</h1>

                <form method="POST" action= "/my_first_form.php">
                    <label for="to">TO:</label>
                    <input type="text"><br>

                    <label for="from">FROM:</label>
                    <input type="text"><br>

                    <label for="subject">SUBJECT:</label>
                    <input type="text"><br>

                    <label for="body">BODY:</label><br>
                    <textarea id="email_body" name="email_body" rows="5" cols="40">Content Here</textarea><br>


                    <button>SEND</button>

                    <input type="checkbox" id="mailing_list" name="mailing_list" value="yes">
                    <label for="mailing_list">Do you want to save a copy to your sent folder?</label>

                </form>
        </section>


        <section>

                <h1>Multiple Choice Test</h1>
                <form action="/my_first_form.php" method="POST">
                    <p>How hot is too hot?</p>
                        <label>
                            <input type="radio" name="question1" value="spicy">
                                Spicy
                        </label>
                        <label>
                            <input type="radio" name= "question1" value="medium">
                                Medium
                        </label>
                        <label>
                            <input type="radio" name="question1" value="mild">
                                Mild
                        </label>   



                    <p>What is your favorite literary genre?</p>  
                        
                        <label>
                            <input type="radio" name="question2" value="poetry">
                            Poetry
                        </label>

                       

                        <label>
                            <input type="radio" name="question2" value="expository">
                            Expository
                        </label> 


                       
                        <label>
                            <input type="radio" name="question2" value="narrative">
                            Narrative
                        </label> 


                      
                        <label>
                            <input type="radio" name="question2" value="drama">
                            Drama
                        </label>


                    <p>Are you a busta?</p>
                        <input type="radio" id="question3" name="question3" value="yes">
                        <label for="question3">Yes?</label> 

                        <input type="radio" id="question3" name="question3" value="no">
                        <label for="question3">No?</label> 

                    <p>Male or Female?</p>  

                        <input type="radio" name="sex" value="male" checked><label>Male</label>
                        <br>
                        <input type="radio" name="sex" value="female"><label>Female</label>
                 

                    <p>What is your favorite color?</p>
                        <label><input type="checkbox" id="ops1" name="ops1" value="red"> RED</label>
                        <label><input type="checkbox" id="ops2" name="obs2" value="blue">BLUE</label>
                        <label><input type="checkbox" id="ops3" name="obs3" value="yellow">YELLOW</label>

                    <p>Who is your fav hip-hop artist?</p>
                        <label for="artist">Pick Several below:</label>
                        <select id="artist" name="artist[]" multiple>
                            <option value=0>Jay-Z</option>
                            <option value=1>Nas</option>
                            <option value=2>Tupac</option>
                            <option value=3>Eminem</option>
                            <option selected value=5>Kanye West</option>

                        </select>

                        <button>Submit Me</button>
                </form>


        </section>  

            <h1>Select Testing</h1>
                <form method="POST" action="/my_first_form.php">
                    <label for="ability">Can you Code?</label>
                    <select id="ability" name="ability[]">
                        <option selected value=1>YES</option>
                        <option value= 0>NO</option>
                        <option>MAYBE</option>
                    </select>

                    <button>SEND</button>
                    

                </form>
                    
        

		</body>


	</html>