<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Profile Mahasiswa</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+4:wght@500;700&family=IBM+Plex+Mono:wght@500;600&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            font-family: "Inter", Arial, sans-serif;
            background: #EDE7D6;

            display: flex;
            justify-content: center;
            align-items: center;

            padding: 40px 20px;
        }

        /* =========================
           BADGE
        ========================= */

        .badge {
            position: relative;
            width: 100%;
            max-width: 360px;

            background: #FAF6EC;
            border: 1px solid #D8D0B8;
            border-radius: 6px;

            box-shadow: 0 30px 60px rgba(27, 42, 65, 0.18);
        }

        .badge::before {
            content: "";
            position: absolute;
            top: 18px;
            left: 50%;
            transform: translateX(-50%);

            width: 34px;
            height: 10px;

            background: #EDE7D6;
            border: 1px solid #D8D0B8;
            border-radius: 6px;
        }

        .clip {
            padding-top: 40px;
            text-align: center;
        }

        .clip .lanyard-hole {
            width: 12px;
            height: 12px;
            margin: 0 auto;

            border-radius: 50%;
            background: #EDE7D6;
            border: 1px solid #C9C2AE;
        }

        /* =========================
           TOP: PHOTO + NAME
        ========================= */

        .top {
            padding: 22px 30px 26px;
            text-align: center;
        }

        .photo-ring {
            width: 92px;
            height: 92px;
            margin: 0 auto 18px;

            border-radius: 50%;
            border: 2px solid #1B2A41;
            padding: 4px;
        }

        .photo {
            width: 100%;
            height: 100%;
            border-radius: 50%;

            background: #DEE0D6;

            display: flex;
            align-items: center;
            justify-content: center;

            font-family: "Source Serif 4", serif;
            font-weight: 700;
            font-size: 34px;
            color: #1B2A41;
        }

        .name {
            font-family: "Source Serif 4", serif;
            font-weight: 700;
            font-size: 22px;
            color: #1B2A41;

            line-height: 1.25;
        }

        .major {
            margin-top: 6px;

            font-size: 12px;
            letter-spacing: 0.04em;
            color: #8C7E5F;
        }

        /* =========================
           PERFORATION
        ========================= */

        .perforation {
            position: relative;
            height: 0;
            border-top: 1.5px dashed #C9C2AE;
        }

        .perforation::before,
        .perforation::after {
            content: "";
            position: absolute;
            top: -6px;

            width: 12px;
            height: 12px;

            background: #EDE7D6;
            border-radius: 50%;
        }

        .perforation::before { left: -6px; }
        .perforation::after { right: -6px; }

        /* =========================
           DETAILS
        ========================= */

        .details {
            padding: 22px 30px 8px;
        }

        .row {
            display: flex;
            justify-content: space-between;
            align-items: baseline;
            gap: 12px;

            padding: 12px 0;
            border-bottom: 1px solid #EEE9D9;
        }

        .row:last-child {
            border-bottom: none;
        }

        .row .label {
            font-size: 11px;
            letter-spacing: 0.06em;
            color: #8C7E5F;
            white-space: nowrap;
        }

        .row .value {
            font-family: "IBM Plex Mono", monospace;
            font-weight: 600;
            font-size: 15px;
            color: #1B2A41;

            text-align: right;
        }

        /* barcode strip under NPM */
        .barcode {
            height: 26px;
            margin-top: 4px;

            background: repeating-linear-gradient(
                90deg,
                #1B2A41 0px,
                #1B2A41 2px,
                transparent 2px,
                transparent 5px,
                #1B2A41 5px,
                #1B2A41 6px,
                transparent 6px,
                transparent 10px
            );
            opacity: 0.85;
        }

        /* =========================
           FOOTER / STAMP
        ========================= */

        .footer {
            position: relative;

            padding: 18px 30px 26px;

            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .footer .campus {
            font-size: 11px;
            color: #8C7E5F;
            line-height: 1.5;
        }

        .footer .campus strong {
            display: block;
            font-size: 12px;
            color: #1B2A41;
        }

        .stamp {
            width: 54px;
            height: 54px;
            flex-shrink: 0;

            border-radius: 50%;
            border: 2px solid #8C3B34;

            display: flex;
            align-items: center;
            justify-content: center;

            transform: rotate(-12deg);
        }

        .stamp span {
            font-size: 8px;
            font-weight: 600;
            letter-spacing: 0.06em;
            color: #8C3B34;
            text-align: center;
            line-height: 1.3;
        }

        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 400px) {
            .top, .details, .footer {
                padding-left: 22px;
                padding-right: 22px;
            }
        }
    </style>
</head>

<body>

    <div class="badge">

        <div class="clip">
            <div class="lanyard-hole"></div>
        </div>

        <!-- TOP -->
        <div class="top">
            <div class="photo-ring">
                <div class="photo">A</div>
            </div>

            <div class="name">Arkan Afarel</div>
            <div class="major">Mahasiswa Ilmu Komputer</div>
        </div>

        <div class="perforation"></div>

        <!-- DETAILS -->
        <div class="details">

            <div class="row">
                <div class="label">Kelas</div>
                <div class="value">Sistem Informasi</div>
            </div>

            <div class="row">
                <div class="label">NPM</div>
                <div class="value">2417052013</div>
            </div>

            <div class="barcode"></div>

        </div>

        <!-- FOOTER -->
        <div class="footer">
            <div class="campus">
                <strong>Kartu Tanda Mahasiswa</strong>
                Laravel MVC &middot; Ilmu Komputer
            </div>

            <div class="stamp">
                <span>KAMPUS<br>VALID</span>
            </div>
        </div>

    </div>

</body>
</html>