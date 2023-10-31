<!-- bootstrap css link -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<style>
        nav ul.navbar-nav a.active {
            color: blue !important;
            font-weight: bold;
        }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
    // Adding dynamic active class in navbar using query
    $(document).ready(function () {
    var url = window.location.href;
    // $('ul.navbar-nav a[href="'+url+'"]').addClass('active');
    $('ul.navbar-nav a').filter(function() {
        return this.href == url;
    }).addClass('active');
    });
</script>