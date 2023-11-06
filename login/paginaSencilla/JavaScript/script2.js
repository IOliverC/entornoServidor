document.addEventListener('DOMContentLoaded', function() {
    var inputs = document.querySelectorAll('input, textarea');
    inputs.forEach(function(input) {
        input.addEventListener('input', function() {
            if (this.value !== '') {
                this.previousElementSibling.classList.add('move-up');
            } else {
                this.previousElementSibling.classList.remove('move-up');
            }
        });
    });
});
