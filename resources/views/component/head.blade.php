<!DOcustoTYPE html>
<html lang="en">
    <head>
        <meta custoharset="UTF-8">
        <meta http-equiv="X-UA-custoompatible" custoontent="IE=edge">
        <meta name="viewport" custoontent="width=devicustoe-width, initial-scustoale=1.0">

        <!-- custoss File -->
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{asset('assets/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{asset('assets/css/boxicons.min.css') }}">
        <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{asset('assets/css/meanmenu.css') }}">
        <link rel="stylesheet" href="{{asset('assets/css/fancybox.min.css') }}">
        <link rel="stylesheet" href="{{asset('assets/css/odometer.min.css') }}">
        <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{asset('assets/css/scrollCue.css') }}">
        <link rel="stylesheet" href="{{asset('assets/css/navbar.css') }}">
        <link rel="stylesheet" href="{{asset('assets/css/footer.css') }}">
        <link rel="stylesheet" href="{{asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{asset('assets/css/dark.css') }}">
        <link rel="stylesheet" href="{{asset('assets/css/responsive.css') }}">

        <title>Emsi</title>

        <link rel="icon" type="image/png" href="{{asset('assets/images/favicon.webp') }}">
<style>
    @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap");
:root {
  --header-height: 3rem;
  --nav-width: 68px;
  --first-color: #B4D7DF !important;
  --first-color-light: #000;
  --white-color: #f7f6fb;
  --body-font: "Nunito", sans-serif;
  --z-fixed: 100;
}
*{
  box-sizing: border-box;
}

.mt-7{
  margin-top: 6rem !important;
}

.body-dash{
  position: relative;
  margin: var(--header-height) 0 0 0;
  padding: 0 1rem;
  font-family: var(--body-font);
  font-size: var(--normal-font-size);
  transition: 0.5s;
}
a {
  text-decoration: none;
}
.header {
  width: 100%;
  height: var(--header-height);
  position: fixed;
  top: 0;
  left: 0;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 0 1rem;
  background-color: var(--white-color);
  z-index: var(--z-fixed);
  transition: 0.5s;
}
.header_toggle {
  color: var(--first-color);
  font-size: 1.5rem;
  cursor: pointer;
}
.header_img {
  width: 35px;
  height: 35px;
  display: flex;
  justify-content: center;
  border-radius: 50%;
  overflow: hidden;
}
.header_img img {
  width: 40px;
}
.l-navbar {
  position: fixed;
  top: 0;
  left: -30%;
  width: var(--nav-width);
  height: 100vh;
  background-color: var(--first-color);
  padding: 0.5rem 1rem 0 0;
  transition: 0.5s;
  z-index: var(--z-fixed);
}
.nav {
  height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  overflow: hidden;
}
.nav_logo,
.nav_link {
  display: grid;
  grid-template-columns: max-content max-content;
  align-items: center;
  column-gap: 1rem;
  padding: 0.5rem 0 0.5rem 1.5rem;
}
.nav_logo {
  margin-bottom: 2rem;
}
.nav_logo-icon {
  font-size: 1.25rem;
  color: var(--white-color);
}
.nav_logo-name {
  color: var(--white-color);
  font-weight: 700;
}
.nav_link {
  position: relative;
  color: var(--first-color-light);
  margin-bottom: 1.5rem;
  transition: 0.3s;
}
.nav_link:hover {
  color: var(--white-color);
}
.nav_icon {
  font-size: 1.25rem;
}
.showSideBar {
  left: 0;
}
.body-pd {
  padding-left: calc(var(--nav-width) + 1rem);
}
.active {
  color: var(--white-color);
}
.active::before {
  content: "";
  position: absolute;
  left: 0;
  width: 2px;
  height: 32px;
  background-color: var(--white-color);
}
.height-100 {
  height: 100vh;
}

@media screen and (min-width: 768px) {
  .body-dash {
    margin: calc(var(--header-height) + 1rem) 0 0 0;
    padding-left: calc(var(--nav-width) + 2rem);
  }
  .header {
    height: calc(var(--header-height) + 1rem);
    padding: 0 2rem 0 calc(var(--nav-width) + 2rem);
  }
  .header_img {
    width: 40px;
    height: 40px;
  }
  .header_img img {
    width: 45px;
  }
  .l-navbar {
    left: 0;
    padding: 1rem 1rem 0 0;
  }
  .showSideBar {
    width: calc(var(--nav-width) + 156px);
  }
  .body-pd {
    padding-left: calc(var(--nav-width) + 188px);
  }
}



/* start cards */
.stat-card {
	padding: 25px;
	margin-bottom: 25px;
	border-radius: 5px;
	overflow: hidden;
	display: flex;
	justify-content: space-between;
	box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
	transition: all 0.2s;
}
.stat-card:hover {
	transform: translateY(-2px);
	box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
}
.stat-card__icon-circle {
	height: 60px;
	width: 60px;
	border-radius: 60px;
	background: rgba(0, 123, 255, 0.2);
	display: flex;
	align-items: center;
	justify-content: center;
}
.stat-card__icon-circle i {
	font-size: 30px;
	color: #007bff;
}
.stat-card__icon.stat-card__icon--success .stat-card__icon-circle {
	background: rgba(40, 167, 69, 0.2);
}
.stat-card__icon.stat-card__icon--success .stat-card__icon-circle i {
	color: #28a745;
}
.stat-card__icon.stat-card__icon--danger .stat-card__icon-circle {
	background: rgba(220, 53, 69, 0.2);
}
.stat-card__icon.stat-card__icon--danger .stat-card__icon-circle i {
	color: #dc3545;
}
.stat-card__icon.stat-card__icon--warning .stat-card__icon-circle {
	background: rgba(255, 193, 7, 0.2);
}
.stat-card__icon.stat-card__icon--warning .stat-card__icon-circle i {
	color: #ffc107;
}
.stat-card__icon.stat-card__icon--primary .stat-card__icon-circle {
	background: rgba(0, 123, 255, 0.2);
}
.stat-card__icon.stat-card__icon--primary .stat-card__icon-circle i {
	color: #007bff;
}
/* end cards */


/* table dashboard */
.contacts .table {
	border-spacing: 0 15px;
	border-collapse: separate;
}
.contacts .table thead tr th,
.contacts .table thead tr td,
.contacts .table tbody tr th,
.contacts .table tbody tr td {
	vertical-align: middle;
	border: none;
}
.contacts .table tbody tr {
	box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
	border-radius: 5px;
}
.contacts .table tbody tr td {
	background: #fff;
}
.contacts .table tbody tr td:nth-child(1) {
	border-radius: 5px 0 0 5px;
}
.contacts .table tbody tr td:nth-last-child(1) {
	border-radius: 0 5px 5px 0;
}
.contacts .user-info__img img{
	border-radius: 45px;
	border: 3px solid #fff;
	box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}
.nav_list {
    overflow-y: auto;
    max-height: calc(100vh - 80px); /* Adjust the value based on your header's height */
}


</style>
    </head>
