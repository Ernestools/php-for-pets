const conversionRate = 3.1;
const convertButtons = document.querySelectorAll('.convert-btn');

const modal = document.getElementById("myModal");
const spanClose = document.querySelector(".close");
const convertedPriceText = document.getElementById("convertedPriceText");


convertButtons.forEach(button => {
    button.addEventListener('click', function() {

        const priceInUSD = this.getAttribute('data-usd');
        const priceInTND = (priceInUSD * conversionRate).toFixed(2);

        
        convertedPriceText.textContent = `Converted Price: ${priceInTND} TND`;
        modal.style.display = "block";
    });
});

spanClose.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
