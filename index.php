 <?php
// Define a function called generateRandomString that accepts an optional parameter called $length.
function generateRandomString($length = 4) {
    // Create a string containing all uppercase letters of the alphabet.
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

    // Determine the length of the $characters string.
    $charactersLength = strlen($characters);

    // Create an empty string variable called $randomString.
    $randomString = '';

    // Use a for loop to iterate over the length of the desired string.
    for ($i = 0; $i < $length; $i++) {
        // Append a randomly selected character from the $characters string to the $randomString variable.
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }

    // Return the generated $randomString variable concatenated with a dash and a random number between 0 and 21474836.
    return $randomString . '-' . rand(0, 21474836);
}

// Call the generateRandomString function and print the generated string to the screen.
echo generateRandomString() . "\n";
