<!-- 


// session_start();

// if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!= true){

//     header("location: login.php");
//     exit;

// } -->




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Docker_OS</title>
    <link rel="stylesheet" href="style_index.css">
</head>

<body>
    <header>
        <h2 class="logo">OS</h2> 
        <nav class="navigation">
            <a href="logout.php">Home</a>
            <a href="aboutlogout.php">About</a> 
            <!-- <a href="#">Subscription</a> -->
            <a href="contactlogout.php">Contact</a>
            <button class="btnLogin-popup" onclick="window.location.href ='login.php'">Logout</button>
        </nav>
    </header>
    
    <div class="Box">
        <div class="img">
            <img src="OS.jpg" alt="OS">
        </div>
        <div class="content">
            <div class="title">
               What is Operating System?
            </div>
            <div class="text">
                Operating System lies in the category of system software. It basically manages
                 all the resources of the computer. An operating system acts as an interface 
                 between the software and different parts of the computer or the computer hardware.
                 The operating system is designed in such a way that it can manage the overall resources and operations of the computer. It is a fully integrated set of specialized programs that handle all the operations of the computer. It controls and monitors the execution of all other programs that reside in the computer, which also includes application programs and other system software of the computer.</div>
         </div>
    </div>

    <div id="app" class="container">
        <a href="window.html">
            <card data-image="Window.jpg">
                <h1 slot="header">Window</h1>
                <p slot="content">A separate viewing area on a computer display screen in a system.</p>
                </card>
        </a>

        <a href="ubantu.html">
            <card data-image="index.jpg">
                <h1 slot="header">Ubuntu</h1>
                <p slot="content">Ubuntu, a modern and easy to use distro from debian.</p>
                </card>
        </a>

        <a href="kali.html">
            <card data-image="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBYWFRgWFhUZGRgaGh0aGhoYGRkcHh4hIRoaGRwcHh4dJC4lHCEuIRocJjgnKy8xNTU1GiQ7QDs0Py40NTEBDAwMEA8QGhISHjYrJCE/NDQ0NDE0MTE0NDY0NDQ0NDQ0NDQ0NDQ0NDQ0NDQxNDE0MTQxNDE0MTExNDQ/PzQ0Mf/AABEIAKkBKgMBIgACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAAAAgMEBQYHAQj/xABKEAABAwIEAgYGBgUKBQUAAAABAAIRAwQFEiExQVEGImFxgZEHEzKhsfAUQlJywdEVM2KS4SNEU4KisrPC0vEWQ3ODkyQ0NmN0/8QAFgEBAQEAAAAAAAAAAAAAAAAAAAEC/8QAFxEBAQEBAAAAAAAAAAAAAAAAABEBIf/aAAwDAQACEQMRAD8A4yhCEAhCEAhLpsB3cB3z+AKl0rJp/nFId4q/6EEFCuaeBtdteWo731B8WKQ3oxO15ZeNwG/3gEGeQtTS6EV3+xWtX/cuqR/FOn0cYjEig1w5trUT/nViVkULUVPR/iTd7R/g6mfg5V9foxes9q0uB/2nkeYEKKp0JytRc0w5rmnk4EHyKbQCEIQCEIQCEIQCEIQCEIQCEIQCEIQCEIQCEIQCU1xGySnTTIAdwKCVkflDozAanUmPyUArT9FmNqvdSJIDoIHMaS2V5fdFazKjw1ss1LXDXSdNOcIM4G/PvS8jeZ8loLLo07L6x+jAe0yNiI3lXH6Ftvtz2wNUGBQhCAQhCAQhCAQhCATlKq5plri082kg+YTYUyhhld/sUarvuscfgEE216UXtM9S6rDsNRxH7riR7leWPpOxGnvVbUHKoxvxZlPvVJQ6KXz/AGbOuf8AtPHxCnUugGIu2tH/ANYsb/ecFenGts/S85wDbi0pvHEscR5NeHT3SpbMbwG70q27aLjzpmnrzzUjHmshS9GeJO/m4b96pTH+ZSG+ivETuymO+o38FepxqLj0X2dw3PZXenDrMqt7paQR4ysZjfo7vreSaXrWj61E5/NsBw8lbWnowxNjg+m+nTcNnNquaR4tEra4RRxyhpUNvctHBzy1/cHho/tApCuDuEaHdeLo/phr031bVzGtBqUBULwAC4Pd1cxHtQG+8rnCyoQhCAQhCAQhCAQhCAQhCAQhCAQlOMwkoBEoTlJhcQ0bkgDx0QTcFvzQqB44A6xPmOIXQcH6QG5a5uSDlOx9rumI/isne4PkZBgOiZcdQRv4A6KFh9Ss0FzInMOvO3ZyQbmtUqy1kDXXI5pgccudunz2pj9Gv+y8dgIgd3VVhhF054BeBmgEnbhuOY3Vp69v2h5hBxBCEIBPUaBcdMo7XOa0ebiAmUILenhVIH+Uu6LexoqVD/Ybl/tKUy3w1nt17qr/ANOlTpjze9x9yzyEGqGKYYz2LCpU7a1yR7qbQEv/AIwpN/VYZZt7XsfUPm5yySEI2J9It4BFNtvTH/10KY+IKjVPSDiTt7t4+62m3+60LLpdNhJAAJJ0AAknuCtIuq/TC/f7V5W8Hub/AHYUZ3SK7O93cHvrVP8AUrfD+gd29ueo1ltT3L7l4piOPVPW9wU4YdhFt+uual28bst25Wfvk694cgy/6buT/Oa3/lf+ausNw/Fq+tIXZHBxe9jf3nuA96tW9P6NCRZYdQpcnvl7/E6Hn9YqtvfSPiNT+cZBypsY33xm96DU2HQbGHe3fPpDl9IquPk3T3rQWfRG6pjr41WHd+b3lcauscuant3FZ33qjyPKYVe5xOp1SpG66f2hFKj1xUNs99q54jrN0rUHaaaseR3tKwa1/o/9XVqPsq5ildNDQRu2oyXU3Dt9pvbmhJ6RdAby1cf5M1aY2qUgXCP2mjrNPeI7SiskvYO6e+iP+w/90/kk0qrmGWkgjl8D+SgaQrandUKmlZmQ/wBLRAHi6mYa4fdynvXl9gr2M9awtq0Zj1tOSATsHtPWpu7HAdkoKpCEIBCEIBCEIBCEIBCEIBKY6CCOBlJQEFpXvHzmB3bBBEiCe3vTAvn6CRAAEQNe09qYqOPuj55qRaUmuMvPKO08AguKGLvIyOHVaIET4f7K2oXVUtadNQOI5KvsrMtBhsjKXD9rWDv4qKyxuoHVO3P+KDOoQhAIQhAIQnKVJznBrWlziYAAJJJ2AA3KBtTsLwutcPyUKbqjuTBMdpOzR2lXNDCba3617ULn8LagQX91Wp7NPtaJdrwRiPTGs5nqbdrbWh/R0JaT99/tPPOTryVE3/hm1tdb+6Gcfze2h7+cOd7LO73pL+mwogtsLWnbDb1hHrKx73u27oWNQlEu/wARq1nZq1R9R3N7ifKdvBREIUAhCEAhC3Hov6MNu7kvqNzUaMOcDs5x9hh5jQkjsjigl9BPR7XuCy4qOdQphwewgdd8EFrmg6NE6hxmeAI1XW8a6T2lrpXrsY77Alz/AN1skeKyvpM6bG0AtrcxXc2XOH/Lado4Zjw5DXiFw+rVc5xc5xLiZJJJJPMk7lasSV3p3pSw4aZqh7RTP4lJd0vwe66tU0zP9NSIj+uWwPNcDQpSO24r6LbSu3PaVTTnVsO9ZTPHnI8CY5LIXfQ3ELG4H0cOcHSGvYJY7Qn1b2mRrEQ4QSRz0yeFY1cWzs1Cs+meOU6HvadD4hdFwD0uuENu6WYf0lLR3i06HwI7k4dZEYfSvSRRaKF0JzW56tOoRv6on2Hb9R2nI8FmqtNzHFrgWuaSC0gggjQgg7Fd/tbPC8Qe+tSc1z30yyo1hyPOoLXuYdQ9paCHgcNysr0s6GXVVrpoirVpCW3TXsaatMDRtRh1dUaBGYb6bpCuTIQhRQhCEAhCEAhCEAhLp0y4wN07aNJeBGu3cglWVIPa4ObsJaQYjn4JItnMeA4aE6QZB4+Ks7h7adN7csB/EDeeGuo/3VLUqnSHk6Dnog6P0Zp06rWPJBeARHIRtHmtT+j2fZHkFzTovUDRma7UHrO2jQGO1dJo4i0tBzDUDly70HCEIQgEIQgFIt7pzJyuLSRBI0McRO4B4gbqOhAIQhAIQhB6QvEJRaR8UCUIQgF3v0VWraGGCq7TO59V5/ZbLR4ZWT4rgi+g7Okf0EGt3Nk4iOZplx+JVxNcKxjEHXFepXeetUeXd0nQdwEDwW2xq/dTvnWdtY2b4LG02utqbnuljXauO51OpXO10lv/AMiZ/wBRn+C1FVNPHa7mVKgw+xyUiBUd9FpgNJOUAknUk8Bqiljdd9F9w3DrI0mODXP+iU8rSYAB8x5hSemDWvtaT7Uu+jU6j2VWEDM2uXH+VqQYdnbGU7NjKImFoMKtaFJlvYVLmmx1Wi9tekW1M5qXIY6mZDSwOZlpAZjwPMKoyR6Q1hSbWNhY+rc8sa/6JTguABLe+CEVukVVjGVXWFiGVM2RxtKcOykNdHcSE9iFhUbhdOnlcXsvq7XBoJgtYxp27QovSAEYbhwOhBuwQdx/Ks0UUdMstG8Y+k1tMmlQqxTGRoc6m1zi0N9mTyXdcDx6jeUs9vUaXZdWn2mOj67N9D4GNCuD+kD/ANxT/wDy23+CxZ61uX03B9N7mObqHNcWuHcRqliStp6UOjotrhtRoAbXBeWtDsrXT1w1xEEEmQNxO2ywi670V6b0r1v0LEmsdm0ZUdDQ48A4iMj+TmxPYd8L0ps7Jtf1di6pUEkFzy0snkwwCWjXrHlx3TTGcQnxbOkjKQRMzoBG8kpBEDnwngoptCEIBKa0kwkqfhNOXyRpB8+CCdQsw0Ax1o358e7go1mDnOgAzEzEmJ1Vp6p7WkvMmSY5dijtteoYdDjx34gnuQQsTqtktBcdBoToPDnCrWpypTIJ49sHXzS7UnO3KBM7HY9iC46PEvLWNHOZ2Os+eq3VPCXQNWbcz+SruiWFGi1xqZS50Fsa5dNQVpwG/MIOHoQhAIQiEAhEJ1tu47BA0gqR6g7ZSCE05uyBLWylGmRuISmMMSPPkl1qWgcgjkpdV8mUhCAQhCAX0H6LcRbXw5jDBdSLqTx2alvgWuA8CvnxaroD0mdY3GeC6k8BtVo3yg6OHa0nxBI4q5qblxB6XYG6zuqlAg5Qc1M/aYScp/A9oKv+k1uH3L723vaTXEMexjXV215FNogAM0dofrLqfSXALfFLdrmvbMF1Gs3WJ3B5tMat3BHMLj/SDCsStames1xyEltVjQ6nq0MJkNgS1oEOAOmyaZte0cAe1joxO2a2oB6wesuQHjRwzgUodGYHWfaHNFbAHPqesdidq+o4gh7qlyXE/VOY0pJ0EdyoG4xXG1R3Dlw2jTT+A5Jf6arTOfjOjWjUEOBiI3aPDTZFamja3QktxqmM7i52W4vBmcZlxinqTlOv7J5KJXwB9UAPxS1qAF7mh1S6dq4h1QiaR1JhxPHcrOU8TqtaGB3VAiMrTpDxxGvtu80qri9ZwLXPkGQRlbGoDTsOQHkgs+m90ypcD1bxUayjRplzc2UllNrXEZgCRI3hZxO16znuLnElx3J4ppQClWdwGODonnrHgOSYpugg8iCvargSSBGqC/bifrhkyDfhvHaEi6wh7m9SDkJaWzGu8idDuR4Kns6mV7XTEEanyPuWvr4kGOa1xd1tQ7L1ddoKDGPpFri0iHAwQU2tVjuFlzRVYCXD2gN459pHzsqG2w+pUdDWnvIgIIYV/aWmZjjBBaA7TSdQpTej1JjZqPcSBrEBo/FTKIDS3JqIknmI394QMucCwgkzoDOiapUAZyzpv46mF7ftBYXc4DY8ypGDauLI4D58UDRwfM4F2unHulU2Hsy12EN+ts7nuAtoyoSdOH5qHXwhhqz7OoPhuIPfIQazDbbO0HLmcN4E68z2q0+gv+z8E5gNMCk0DgPOeJ5q19WUHzShAUmjQJMAjXefnmgjJWQxPBPOtnAxB7CASPcplCx0kukcYOo7CCgg09NfntUhzwTo0jvd/BW9tQoRBdpGhUP1IkwerwMzPfyQJYZggHTfX8V7XtgWiN5nh28u5eNotGhfqdYlXjKTZgdYxrCClt6Ja3TQk+fz3KRWsXZOfa5W1SiA3MQO08OxNtrNzamQREfigyFakWmCm1oLy1GbmHfPgqq9tchHIoIiE9Sty5TThT8ukH54IKxOU2HeCrR2FhuUbk7n8ApgtQ2ZB0QWXRzpBVtOtRfo49djusxx5ls79og6brc4d6Wrc9W4pPpu+0yHs7+Dh3QVyu4oP9oNOUcAqu6Gs+CtSO8P6YYLV9t1F337dx/vMTX6SwF3Cz/8DW/5FwVCtI762hgNXqj6Hryc1h8NWnyTlb0a4ZUbLGOaDs6nVcfLMXBfPyn4bi1e3dmoVX0zv1XEA942PiFKR0/E/Q63e3uSNPZqsn+0zb91YnGugl9bAufQL2D69Lrt7zHWaO8Ba3APSjmb6m/acpEeuolzHjtcGEGeOZsdxVjjGNYhZNFzb3Db2ydEOe1rnM19l7mQezNz0IHG8OuMoXTqmM4ViWlzSNncH/m04yE/tECDt9Yf1llulHQ+vZw8xUoO9itT1aZ2n7J9x4EqQrNKdYte97QDmyuENc4x4TtsotNgIJJ2U7B6oa4ggcCCdII1/PyUVoMVxL1b2gOI3nlvxU+ndDLMiewbqmq1M7tWOdxJO3bpCsbQAtGmU8uzbwQOVqjKjXMdsdDzTptg0wDx8gNgqm56pMFSKdw+AXDSPakHzjY/kgcrWokAidz2amVDp5mvDgIJ4cNN/gpLrqXtbGp4pDHZyHay2Wwd9/yQWNjc5nEOG5+IUu5t3FzIg6ZXB3Hi0qpY0sIO+wP5hae2uW5MxGw8eyPnggsei99kb6t7tAJZm3jlPmtF9JWIsyZlxBaJMceGnlwWjpVHZR1uA+r2IOAqdYVaYP8AKAxG7Z8j/BQUILy0xJjHEAHJsMxKjuvWZnZWuAOghVaAUF/b2hYx3Uc155tkd22iqq1dwJAO3JLdilUtyF5y8tB7wJUJAqeKsLW+c3U6D4+CrV6B2oNTQvg9mXiTJn3FP0rRoEkie4eELN2FQgnWO1X1wdtRl08ygeNI8e8d/LxUG/t2ukjlyKsaF008RIQ4l2rRr2oKDD4cMsRHHiFcWjZAEk84UYWBY7MWzmMGJ0VzZWuUAxog9+ijMDv87KQ+1adwh8Tt5qS8GN0FK+mWPy6wfnRUeMWsOmNNFrqjA4t1kgpi/t2uERr8hBk7bDc2+ikXGCw2QrBlMs7RKXVu2nQ8uCDIFCduGw9w7SlupaNIG+6COtB0W6UVbJxyw+k/SrRfqx42OnB0cfORoqZ1A8F45umpHYB+KDT9LMCphrb2zl1pVMR9ai/jTfyHI/wJj9F+ltW1mm4CtbPkPoP1aQdy2fZPuPFe9DcdbQe6lXGa1rj1dZnIHQPbyc3eRw7YUHpPgrrS5dRJzN0dTfwex2rHDw94Kos+kOA02NFzauL7Wr7M+1TeNXUn/tDhO457nLag8iFoeiOJ5HPo1D/6eqIqA6hhHsVhycx0HtEhV13hz21ajHDrtzHTm09aOfFQP4LWcXkF2kZnTrOwGqv2vMjSTwKzWG1HNkNZLnbl2gAWrwui4NzEgk6adm580EerqHsc0FwbIbx8CqrCCXAyHZRMGdzxA7d1f3GHS7PPWGk67JLKIDwANtZI9+m6CCLXPrOrdfkqdQpb/Pip7aIGyk2tpUe5oFI5HfXiPHuQVjIcTI7u/j57qdTqAMyEdk+SkXGCVGk9XY7Df54qnuqwaSHODeHWO8diDQYXSa4w4yyJLj9WI1KvcrOfuCwFlXezPEnbTUggzvzEx7ld07qrA6o25v8A9KDkqEIAQCEv1Z5HySEAhCEDlNszJ4JELwFEoJdBjYk8/NSXXhiJGg8xsFXCoYiUglBYULyDJCuLC8a6dYWYa6FfYZUYWHq9b59yC9s74TBHjz8FKq3gEALM290CYOhiPerRlEkSDrsJCCxNdogc06amirKTcs5jJaN0G4J0B2QTwZMjcJQZJkqKAYlp1+KlUi4jTT52QJu6YcCImY/NVdxbfZAB7Fb0gWv5hPvaDrAlBibnDS0l0ZuMEJN00+rAy5dtJ24rYOog8FGZaNaT1dDrBCDFSQNRuo7itDibGvLmiAQRHaqm4snN4eKCEtnm+m4YQda9jBHN1u4wR25HR3DvWMIV/wBDMRbRu2F/6qpNGqOBZUGR09gkO/qq4mq2zuQxr9CXOAA5AcUuvfuc5rzOdrGtOp1LW5Af3QJ5mUu8sHUqtSidXU3vpntLXFs+5OtwV7tzHvUU2/FHuEAa85n3K+6OVT6uM0uaSTPCT2prDsFDcpcBzMq6o2bWgtYNDqBt368f4IHKrifEapq1qtdIB1CdFMwARt8E06kGDqhA+Hgkcj/sthheIsn1bZJbsTGvcsTbXLXAjkddPgp1CoWOztMFBu6gGhjWdFQY1hFKq8esptJ4EaEeIU7DcXa+GvIDuHCf4p28Y0ukPE8ifggqLfD2MADW7TqdTrvJT3q162q06AgnlOqUg4SpVnGvNRV6DCDZ4y+wNtbig2p9KFNnri3SlmgZswdqX9rIHOVkbqM2iRnPM+aQiZgQhCKEIQgEIQgFItyWkFMgHl7k+/nOg4IHajgXS0x8O9abD7puQNLgTG/DtWOc5Kp1SCNY7kGtqtcTqQRw4Jq3yl3Z8+aasrrOA06ngpVOgdmjTiZ2QTbd4PYrBjgOKpadJzASTI7SgXJJMbDmfwQXoy7pbgFTU7naDoVPY46IJOVNPYZTsTHcvSzZBQXOHAPLhMnX+CU+3BaZHBT798FoPHkmHMlhE6wgw13QLHEEEa8UwArO+Y4zPtce2FWINffs9bV9eSJqMovJ/bNJgef3w5W9rQzDqkQNJ+Ky+Al73taZLQ0tHL2i78St1QpBrQ0bIEiiNNO7l4pVV4EaJzL2JFRsjVAw8HdQn1y4xl0I35GFLp1w7qjfaRqk/RnNaQTmJJO0Ry+e1BRF+RwgGRuFMsLqXOzHqu1AJ2KbZRmc7NecGTy1leXVAAA5srW+1PZrPkgt/WwBpt3/ACE+17i5oknbKZ93bus5bYk57M+wa4jjJH1T3x8FdYM03DmtB1aQ7wBGsfOyDY0LVha12UBxGsfFeZOxPsqGNYEaCEn1iD59QhCAQhCAQhCAQhCASmmCkoQXIqU2tBzanePwCrbmqHHTt3TCEAvQV4hBYW9doIIOvaB7lbWmIBxGusxCzKmUN2feb8UGvuWtid+YVXcXbQcoHWOwEe9Wx9g/d/BZJ/63xCC/tDEE+JIWgpuAggyIVI/9U7w+IVrQ2b4IJ41XrwvAveCCuxVktA7ZUczkHcpl7+SjjbwQZO/kOBcIJKLLDw9wzbcI4+PAJWKe2VPwzh3H4ILqwFNhyhzQRHVA17lbzrpssnhv69/f+AWqp7DuQSGBeVWAgg8V61eVEFNY2uR51nXQDlrv5qycColv7Z+eKk3G6Bj1Zn81Q4y8PcWA6Ay7tMfBX2Ieye9qz+Lfrz9wfign4Db0GR6zbkZMunq6DhCvqVsGP9ZRZGo+r7jzG+qzFl+uZ3D4rcYXu7uHxQSqddxEuZlJ1I0jt7l76w8h70k7u7/yQg//2Q==">
        <h1 slot="header">Kali</h1>
        <p slot="content">A pen testing os from testing branch of debian with seamless options.</p>
        </card>
        </a>

        <a href="archcraft.html">
            <card data-image="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSEgI0pCu29VpUpnCxWp8MphSj5woTjLOpOhQ&usqp=CAU">
                <h1 slot="header">Archcraft</h1>
                <p slot="content">Archcraft is just another Linux distribution, made on top of Arch Linux.</p>
                </card>
        </a>
    </div>
    <!-- partial -->
        <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.0.1/vue.min.js'></script><script  src="script.js"></script>
    
</body>

</html>