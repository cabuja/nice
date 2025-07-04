<div id="service_industria"></div>
<div class="contentBtnPortfolio">
    <?php
    $portfolio=$_GET["portfolio"];

    switch ($portfolio) {
        case 'industria':
            echo "
            <a href=\"?portfolio=industria#portfolio\" class=\"btnPortfolioHover\" id=\"textos_grandes\">INDUSTRIAS</a>
            <a href=\"?portfolio=servicios#portfolio\" class=\"btnPortfolio\" id=\"textos_grandes\">SERVICIOS</a>
            <a href=\"?portfolio=moda#portfolio\" class=\"btnPortfolio\" id=\"textos_grandes\">MODA</a>
            <a href=\"?portfolio=agencias#portfolio\" class=\"btnPortfolio\" id=\"textos_grandes\">AGENCIAS</a>";
            break;
        case 'moda':
            echo "
            <a href=\"?portfolio=industria#portfolio\" class=\"btnPortfolio\" id=\"textos_grandes\">INDUSTRIAS</a>
            <a href=\"?portfolio=servicios#portfolio\" class=\"btnPortfolio\" id=\"textos_grandes\">SERVICIOS</a>
            <a href=\"?portfolio=moda#portfolio\" class=\"btnPortfolioHover\" id=\"textos_grandes\">MODA</a>
            <a href=\"?portfolio=agencias#portfolio\" class=\"btnPortfolio\" id=\"textos_grandes\">AGENCIAS</a>";
            break;
        case 'servicios':
            echo "
            <a href=\"?portfolio=industria#portfolio\" class=\"btnPortfolio\" id=\"textos_grandes\">INDUSTRIAS</a>
            <a href=\"?portfolio=servicios#portfolio\" class=\"btnPortfolioHover\" id=\"textos_grandes\">SERVICIOS</a>
            <a href=\"?portfolio=moda#portfolio\" class=\"btnPortfolio\" id=\"textos_grandes\">MODA</a>
            <a href=\"?portfolio=agencias#portfolio\" class=\"btnPortfolio\" id=\"textos_grandes\">AGENCIAS</a>";
            break;
        case 'agencias':
            echo "
            <a href=\"?portfolio=industria#portfolio\" class=\"btnPortfolio\" id=\"textos_grandes\">INDUSTRIAS</a>
            <a href=\"?portfolio=servicios#portfolio\" class=\"btnPortfolio\" id=\"textos_grandes\">SERVICIOS</a>
            <a href=\"?portfolio=moda#portfolio\" class=\"btnPortfolio\" id=\"textos_grandes\">MODA</a>
            <a href=\"?portfolio=agencias#portfolio\" class=\"btnPortfolioHover\" id=\"textos_grandes\">AGENCIAS</a>";
            break;
        default:
        echo "
        <a href=\"?portfolio=industria#portfolio\" class=\"btnPortfolioHover\" id=\"textos_grandes\">INDUSTRIAS</a>
        <a href=\"?portfolio=servicios#portfolio\" class=\"btnPortfolio\" id=\"textos_grandes\">SERVICIOS</a>
        <a href=\"?portfolio=moda#portfolio\" class=\"btnPortfolio\" id=\"textos_grandes\">MODA</a>
        <a href=\"?portfolio=agencias#portfolio\" class=\"btnPortfolio\" id=\"textos_grandes\">AGENCIAS</a>";
            break;
    }
    ?>
</div>
<ul id="portfolio-list" class="centerrow">
    <?php
    switch ($portfolio) {
        case 'industria':
            require_once "inc/portfolio/industria.php";
            break;
        case 'servicios':
            require_once "inc/portfolio/servicios.php";
            break;
        case 'moda':
            require_once "inc/portfolio/moda.php";
            break;
        case 'agencias':
            require_once "inc/portfolio/agencias.php";
            break;
        
        default:
            require_once "inc/portfolio/industria.php";
            break;
    }
    ?>
</ul>
<div style="clear: both;"></div>