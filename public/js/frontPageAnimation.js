/**
 * Listen for the 'DOMContentLoaded' event, which fires when the HTML document has been fully loaded.
 */ 
document.addEventListener("DOMContentLoaded", function() {
    /** 
     * Phrases to be dynamically displayed in the 'dynamicText' element.
     */
    const phrases = [
        "Track your grappling techniques.",
        "Log your training sessions.",
        "Monitor your progress over time."
    ];

    const textElement = document.getElementById('dynamicText'); // Element where the text will appear.

    let currentPhrase = 0; // Index of the current phrase being displayed.
    let currentLetter = 0; // Position in the current phrase.

    /**
     * Type out letters of the current phrase one at a time.
     */
    function typeLetters() {
        /**
         * Check if the current letter is less than the length of the current phrase.
         * 
         * Append the current letter to the text content of the text element.
         */
        if (currentLetter < phrases[currentPhrase].length) {
            textElement.textContent += phrases[currentPhrase].charAt(currentLetter);
            currentLetter++;
            setTimeout(typeLetters, 40); // Schedule the next letter.
        } else {
            setTimeout(clearText, 2000); // Delay before starting to clear text.
        }
    }

    /**
     * Clear the displayed phrase one character at a time.
     */
    function clearText() {
        /**
         * Check if the current letter is greater than 0.
         * 
         * Remove the last letter from the text content of the text element.
         */ 
        if (currentLetter > 0) {
            textElement.textContent = textElement.textContent.substring(0, currentLetter - 1);
            currentLetter--;
            setTimeout(clearText, 20); // Schedule the next character removal.
        } else {
            currentPhrase = (currentPhrase + 1) % phrases.length; // Cycle to the next phrase.
            typeLetters(); // Start typing the next phrase
        }
    }

    typeLetters(); // Initiate the typing of the first phrase.
});