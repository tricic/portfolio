import './_skillHover.js';
import './_urlParam.js';

// Prevent img drag
$('img').on('dragstart', function(e) {
    e.preventDefault();
});

// Check GET params
if($.urlParam('success') !== null) {
    if($.urlParam('success') === 'true') {
        alert('Sucess!');
    } else {
        alert('Error!');
    }
}