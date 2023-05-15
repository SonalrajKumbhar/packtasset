<footer>
<div class="footer-container container">
    <div class="content_1">
        <img src="https://i.postimg.cc/htGyQ4JB/footer-logo.png" alt="logo">
        <p>The customer is at the heart of our<br>unique business model, which includes<br>design.</p>
        <img src="https://i.postimg.cc/Nj9dgJ98/cards.png" alt="cards">
    </div>
    <div class="content_2">
        <h4>SHOPPING</h4>
        <a href="#sellers">Clothing Store</a>
        <a href="#sellers">Trending Shoes</a>
        <a href="#sellers">Accessories</a>
        <a href="#sellers">Sale</a>
    </div>
    <div class="content_3">
        <h4>SHOPPING</h4>
        <a href="./contact.html">Contact Us</a>
        <a href="https://payment-method-sb.netlify.app/" target="_blank">Payment Method</a>
        <a href="https://delivery-status-sb.netlify.app/" target="_blank">Delivery</a>
        <a href="https://codepen.io/sandeshbodake/full/Jexxrv" target="_blank">Return and Exchange</a>
    </div>
    <div class="content_4">
        <h4>NEWLETTER</h4>
        <p>Be the first to know about new<br>arrivals, look books, sales & promos!</p>
        <div class="f-mail">
            <input type="email" placeholder="Your Email">
            <i class='bx bx-envelope'></i>
        </div>
        <hr>
    </div>
</div>
<div class="f-design">
    <div class="f-design-txt container">
        <p>Packt</p>
    </div>
</div>
</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" type="text/js"></script>
<script>

$(document).ready(function () {
$("a").on("click", function (event) {
if (this.hash !== "") {
event.preventDefault();

var hash = this.hash;
$("html, body").animate(
{
  scrollTop: $(hash).offset().top,
},
800,
function () {
  window.location.hash = hash;
}
);
}
});
$('#booklist').DataTable({
columnDefs: [
{
targets: [0, 1, 2, 3, 4], // Column indexes to set the width
width: '20%', // Desired width percentage
}
]
});
});

$(".menu-items a").click(function () {
$("#checkbox").prop("checked", false);
});

</script>

</body>
</html>