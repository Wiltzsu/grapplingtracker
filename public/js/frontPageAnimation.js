document.addEventListener("DOMContentLoaded", function() {
    const phrases = [
        "Track your grappling techniques.",
        "Log your training sessions.",
        "Monitor your progress over time."
    ];
    const textElement = document.getElementById('dynamicText');
    let currentPhrase = 0;
    let currentLetter = 0;
    let textInterval;

    function typeLetters() {
        if (currentLetter < phrases[currentPhrase].length) {
            textElement.textContent += phrases[currentPhrase].charAt(currentLetter);
            currentLetter++;
            setTimeout(typeLetters, 40); // Adjust typing speed
        } else {
            setTimeout(clearText, 2000); // Wait before switching phrase
        }
    }

    function clearText() {
        if (currentLetter > 0) {
            textElement.textContent = textElement.textContent.substring(0, currentLetter - 1);
            currentLetter--;
            setTimeout(clearText, 20); // Adjust deleting speed
        } else {
            currentPhrase = (currentPhrase + 1) % phrases.length; // Move to the next phrase
            typeLetters(); // Start typing the next phrase
        }
    }

    typeLetters(); // Start typing the first phrase
});