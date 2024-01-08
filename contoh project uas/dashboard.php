<!DOCTYPE html>
<html>
<head>
	<title>Website Portofolio</title>
	<style>
        nav {
            background-color: #333;
            overflow: hidden;
            position: relative;
        }
        nav a {
            position: relative;
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decorating: none;
        }
        .indicator {
            position: absolute;
            bottom: 0;
            height: 100%;
            background: linear-gradient(0deg, #08f9ff33, transparent);
            border-bottom: 5px solid cyan;
            pointer-events: none;
            transition: 0.3s ease-in-out;
            filter: drop-shadow(0 5px 25px cyan);
        }
    </style>
</head>
<body>
    <nav>
        <a href="indexpembayaran.php">Pembayaran</a>
        <a href="#">Guru</a>
        <a href="#">Siswa</a>
        <a href="#">Kelas</a>
    </nav>