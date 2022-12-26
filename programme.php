<!DOCTYPE html>
<html lang="fr">
<link href="assets/css/programme.css" rel="stylesheet">
<title>ORASIS 2023 | Programme</title>

<!-- Header Import -->
<?php include "assets/includes/header.php" ?>
<script src="./assets/js/daypilot-all.min.js"></script>

<body data-title="js_programme">
    <!-- Navbar Import -->
    <?php include "assets/includes/navbar.php" ?>
    <section class="content_page">
        <div class="title">
            <h1 class="greytitle">LE PROGRAMME</h1>
            <h3 class="bluetitle">LE PROGRAMME</h3>
        </div>
        <div class="programme">
            <div class="calendar" id="day_calendar">
                <div class="calendar-base">
                    <div class="scroll_indicator" onmousewheel="hideIndicator()" id="scroll_indic">
                        <div class="bg_dark">

                        </div><a class="mouse-scroll" href="#">
                            <span class="mouse">
                                <span class="mouse-movement">
                                </span>
                            </span>
                            <span class="mouse-message fadeIn">Dérouler vers le bas</span>
                        </a>
                    </div>
                    <div class="planning" id="dp">
                    </div>
                </div>
                <!-- calendar-base -->
                <div class="calendar-left">


                    <div class="num-date" id="num_date">22</div>
                    <!--num-date -->
                    <div class="day" id="label_date">LUNDI</div>
                    <!--day -->
                    <div class="current-events">
                        <div class="label_date">
                            <span>Lun.</span>
                            <span>Mar.</span>
                            <span>Mer.</span>
                            <span>Jeu.</span>
                            <span>Ven.</span>
                        </div>
                        <div class="num-dates">
                            <button class="first-day btn_dates active_date" id="Lundi" value="22"
                                onclick="changeDate(this.value,this.id)">22</button>
                            <button class="first-day btn_dates" id="Mardi" value="23"
                                onclick="changeDate(this.value,this.id)">23</button>
                            <button class="first-day btn_dates" id="Mercredi" value="24"
                                onclick="changeDate(this.value,this.id)">24</button>
                            <button class="first-day btn_dates" id="Jeudi" value="25"
                                onclick="changeDate(this.value,this.id)">25</button>
                            <button class="first-day btn_dates" id="Vendredi" value="26"
                                onclick="changeDate(this.value,this.id)">26</button>
                        </div>

                    </div>
                    <div class="views">
                        <button id="week_view" class="calendar_btn">VUE EN SEMAINE</button>
                    </div>

                    <!--current-events -->

                </div>
            </div>
            <!-- calendar-left -->
            <div class="modal_week" id="modal">
                <div class="modal-content">
                    <div class="btn_close">
                        <span class="close">&times;</span>
                    </div>

                    <div id="modal_calendar">

                    </div>

                </div>
            </div>
        </div>
        <!-- container -->
    </section>
    <!-- Footer Import -->
    <?php include "assets/includes/footer.php" ?>


</body>

</html>