<?php

use App\Libraries\CustomFormatter;

$formatter = new CustomFormatter();
?>

<?= $this->extend('layouts/lobby'); ?>

<?= $this->section('content'); ?>



<!-- Main menu select01 -->
<i onclick="opentab('section01')" id="defaultOpen" hidden class="fal fa-plus tablinks"></i>
<div id="section01" class="tabcontent mainsection">
    <div class="headerprocess"><?= esc($title) ?></div>
    <div class="menucontain">
        <table style="width: 100%;">
            <tr>
                <td class="tdgridicon">
                    <span onclick="location.href='<?= site_url('deposit') ?>'">
                        <!-- <i class="fal fa-plus tablinks"></i> -->
                        <img style="width: 4rem;" src="<?= base_url() ?>assets/images/menu/deposit.png" alt="deposit">
                        <br>
                        <?= lang('Lang.home.deposit') ?>
                    </span>
                </td>
                <td class="tdgridicon">
                    <span onclick="location.href='<?= site_url('withdraw') ?>'">
                        <!-- <i class="fal fa-minus tablinks"></i> -->
                        <img style="width: 4rem;" src="<?= base_url() ?>assets/images/menu/withdraw.png" alt="withdraw">
                        <br>
                        <?= lang('Lang.home.withdraw') ?>
                    </span>
                </td>
                <td class="tdgridicon">
                    <span onclick="location.href='<?= site_url('history') ?>'">
                        <!-- <i class="fal fa-history tablinks" id style="font-size: 25px; padding-top: 14px;"></i> -->
                        <img style="width: 4rem;" src="<?= base_url() ?>assets/images/menu/history.png" alt="history">
                        <br>
                        <?= lang('Lang.home.history') ?>
                    </span>
                </td>
                <!-- <td class="tdgridicon">
                    <span onclick="location.href='<?= site_url('promotion') ?>'">
                        <i class="fal fa-gift button--resize tablinks" id style="font-size: 25px; padding-top: 13px;"></i>
                        <br>
                        <?= lang('Lang.home.promotion') ?>
                    </span>
                </td>
                <td class="tdgridicon">
                    <span onclick="location.href='<?= site_url('reward') ?>'">
                        <i class="fal fa-calendar-star tablinks" style="font-size: 25px; padding-top: 14px;"></i>
                        <br>
                        <?= lang('Lang.home.reward') ?>
                    </span>
                </td> -->
            </tr>
            <tr>
                <td class="tdgridicon">
                    <span onclick="location.href='<?= site_url('change-password') ?>'">
                        <!-- <i class="fal fa-lock tablinks" style="font-size: 25px; padding-top: 13px;"></i> -->
                        <img style="width: 4rem;" src="<?= base_url() ?>assets/images/menu/change_password.png" alt="change_password">
                        <br>
                        <?= lang('Lang.home.change_pass') ?>
                    </span>
                </td>
                <!-- <td class="tdgridicon">
                    <span onclick="location.href='<?= site_url('history') ?>'">
                        <i class="fal fa-history tablinks" id style="font-size: 25px; padding-top: 14px;"></i>
                        <br>
                        <?= lang('Lang.home.history') ?>
                    </span>
                </td> -->
                <td class="tdgridicon">
                    <!-- <span onclick="location.href='<?= site_url('playgame') ?>'"> -->
                    <span onclick="actionPlaygame()">
                        <!-- <i class="fal fa-gamepad-alt tablinks" id style="font-size: 25px; padding-top: 14px;"></i> -->
                        <img style="width: 4rem;" src="<?= base_url() ?>assets/images/menu/play_game.png" alt="play_game">
                        <br>
                        <?= lang('Lang.home.play_game') ?>
                    </span>
                </td>
                <td class="tdgridicon">
                    <span onclick="location.href='<?= site_url('profile') ?>'">
                        <!-- <i class="fal fa-user-alt tablinks" id style="font-size: 25px; padding-top: 14px;"></i> -->
                        <img style="width: 4rem;" src="<?= base_url() ?>assets/images/menu/profile.png" alt="profile">
                        <br>
                        <?= lang('Lang.home.profile') ?>
                    </span>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <div style="margin-top: 1.4rem">
                        <a href="<?= $line_link ?>" target="_blank" rel="noreferrer">
                            <img src="<?= base_url() ?>assets/images/conntact_us.png" alt="contact us" style="width:250px">
                        </a>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div class="swiper-container-2">
        <div class="swiper-wrapper">
            <?php if (empty($banners)) : ?>
                <div class="swiper-slide">
                    <img src="<?= site_url("assets/images/default/banner_default.png") ?>">
                </div>
            <?php else : ?>
                <?php foreach ($banners as $banner) : ?>
                    <div class="swiper-slide">
                        <img src="<?= $banner->image ?>" alt="<?= $banner->name ?>" title="<?= $banner->detail ?>">
                    </div>
                <?php endforeach ?>
            <?php endif ?>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev swiper-button-white"></div>
        <div class="swiper-button-next swiper-button-white"></div>
    </div>
</div>
<!-- end Section 1 main -->



<!-- swiper js -->
<script src="assets/js/swiper-bundle.min_1.js"></script>

<script>
    const formAction = document.createElement('form')
    $(function() {
        opentab('section01');

        //NOTE: Create Form.
        formAction.setAttribute('action', '')
        formAction.setAttribute('id', 'form1')
        formAction.setAttribute('method', 'post')
        formAction.setAttribute('target', '_blank')

        const eventTragetInput = document.createElement('input')
        eventTragetInput.setAttribute('type', 'hidden')
        eventTragetInput.setAttribute('name', '__EVENTTARGET')
        eventTragetInput.setAttribute('id', '__EVENTTARGET')
        eventTragetInput.setAttribute('value', 'btnSignIn')

        const eventArgumentInput = document.createElement('input')
        eventArgumentInput.setAttribute('type', 'hidden')
        eventArgumentInput.setAttribute('name', '__EVENTARGUMENT')
        eventArgumentInput.setAttribute('id', '__EVENTARGUMENT')
        eventArgumentInput.setAttribute('value', '')

        const viewStateInput = document.createElement('input')
        viewStateInput.setAttribute('type', 'hidden')
        viewStateInput.setAttribute('name', '__VIEWSTATE')
        viewStateInput.setAttribute('id', '__VIEWSTATE')
        viewStateInput.setAttribute('value', '')

        const validationInput = document.createElement('input')
        validationInput.setAttribute('type', 'hidden')
        validationInput.setAttribute('name', '__EVENTVALIDATION')
        validationInput.setAttribute('id', '__EVENTVALIDATION')
        validationInput.setAttribute('value', '')

        const viewStateGenInput = document.createElement('input')
        viewStateGenInput.setAttribute('type', 'hidden')
        viewStateGenInput.setAttribute('name', '__VIEWSTATEGENERATOR')
        viewStateGenInput.setAttribute('id', '__VIEWSTATEGENERATOR')
        viewStateGenInput.setAttribute('value', '')

        const usernameInput = document.createElement('input')
        usernameInput.setAttribute('type', 'text')
        usernameInput.setAttribute('name', 'txtUserName')
        usernameInput.setAttribute('id', 'txtUserName')
        usernameInput.setAttribute('value', '<?= session()->data->webuser ?>')

        const passwordInput = document.createElement('input')
        passwordInput.setAttribute('type', 'password')
        passwordInput.setAttribute('name', 'password')
        passwordInput.setAttribute('id', 'password')
        passwordInput.setAttribute('value', '<?= session()->data->webpass ?>')

        formAction.appendChild(eventTragetInput)
        formAction.appendChild(eventArgumentInput)
        formAction.appendChild(viewStateInput)
        formAction.appendChild(validationInput)
        formAction.appendChild(viewStateGenInput)
        formAction.appendChild(usernameInput)
        formAction.appendChild(passwordInput)
        prepare_form();
    })

    const prepare_form = async () => {
        document.body.appendChild(formAction)
        document.getElementById('form1').style.display = 'none'

        // NOTE: Ermergency
        // const response = await fetch("https://auth1.ufalogin.co/get_data.php")
        //     const data = await response.json();
        //     document.getElementById("__VIEWSTATE").value = data[0]
        //     document.getElementById("__EVENTVALIDATION").value = data[1]
        //     document.getElementById("__VIEWSTATEGENERATOR").value = data[2]
        //     document.querySelector("form").action = data[3]

        try {
            const response = await fetch("https://demoapi.botbo21.com/api/getkeyufa?sign=C5Z10zzL4M7BiOSmEgyoAcnw5g38CvO2")
            const data = await response.json();
            document.getElementById("__VIEWSTATE").value = data[0]
            document.getElementById("__EVENTVALIDATION").value = data[1]
            document.getElementById("__VIEWSTATEGENERATOR").value = data[2]
            document.querySelector("form").action = data[3]
        } catch (error) {
            const response = await fetch("https://auth1.ufalogin.co/get_data.php")
            const data = await response.json();
            document.getElementById("__VIEWSTATE").value = data[0]
            document.getElementById("__EVENTVALIDATION").value = data[1]
            document.getElementById("__VIEWSTATEGENERATOR").value = data[2]
            document.querySelector("form").action = data[3]
        }
    }


    const actionPlaygame = () => {
        // $('#play_game').modal('show')
        submitPlayGames()
    }

    const submitPlayGames = () => {
        const username = $('#txtUserName').val()
        const password = $('#password').val()
        if (username == '' || password == '') return
        // $('#play_game').modal('hide')
        document.getElementById('form1').submit()
    }

    const toggleShowPassword = () => {
        const inputType = $('#password').prop('type')
        $('#password').get(0).type = inputType == 'password' ?
            'text' : 'password'
    }

    var swiper2 = new Swiper('.swiper-container-2', {
        slidesPerView: 'auto',
        centeredSlides: true,
        spaceBetween: 50,
        initialSlide: 1,
        observer: true,
        observeParents: true,
        autoplay: {
            delay: 3500,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            dynamicBullets: true,
        },
    })
</script>

<?= $this->endSection(); ?>