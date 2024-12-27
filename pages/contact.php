<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="..\assets\css\style.css">
    <link rel="stylesheet" href="..\assets\css\global.css">
    <link rel="stylesheet" href="..\assets\css\responsive.css">
    <title>Contact</title>

</head>
<body>
    

<form action="" method="POST" class=" contact-form container flex-container">

    <fieldset>
        <legend class="san-serif font-18 ">Contact Us</legend>
        
        <!-- Name Field -->
        <label for="name" class="san-serif font-16">Full Name:</label>
        <input type="text" id="name" name="name" required placeholder="" class="font-16 san-serif">
        
        <!-- Email Field -->
        <label for="email" class="san-serif font-16">Email:</label>
        <input type="email" id="email" name="email" required placeholder="" class="font-16 san-serif">
        
         <!-- Phone Number-->
        <label for="email" class="san-serif font-16">Phone Number:</label>
        <input type="number" id="email" name="email" required placeholder="" class="font-16 san-serif">
        
        <!-- Message Field -->
        <label for="message" class="san-serif font-16">Message:</label><br>
        <textarea id="message" name="message" rows="5" required placeholder="" class="san-serif font-16"></textarea>
        
        <!-- Submit Button -->
        <button type="submit" class="text-white font-16 san-serif">Send Message</button>
    </fieldset>
  
</form>
 <a href="../pages/index.php" class="font-16 san-serif text-black"> Back</a>
</body>
</html>