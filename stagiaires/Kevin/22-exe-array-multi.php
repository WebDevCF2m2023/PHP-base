<?php
$webdev_2023_2024 = [
    "WEBDEV01" => [
        "Nom" => "Tekfi",
        "Prenom" => "Laura",
        "Sites" => [
            "SitePerso" => "https://2023.webdev-cf2m.be/Laura/",
            "SitePreformation" => "https://2023.webdev-cf2m.be/Laura/prefo/",
            "github" => "https://github.com/LauraTcf2",
        ],
    ],
    "WEBDEV02" => [
        "Nom" => "Eliya Bofana",
        "Prenom" => "Tevin",
        "Sites" => [
            "SitePerso" => "https://2023.webdev-cf2m.be/Tevin/",
            "SitePreformation" => "https://2023.webdev-cf2m.be/Tevin/prefo/",
            "github" => "https://github.com/Tevin01",
        ],
    ],
    "WEBDEV03" => [
        "Nom" => "Hoater",
        "Prenom" => "Simona",
        "Sites" => [
            "SitePerso" => "https://2023.webdev-cf2m.be/Simona/",
            "SitePreformation" => "https://2023.webdev-cf2m.be/Simona/",
            "github" => "https://github.com/simonaiuliana",
        ],
    ],
    "WEBDEV04" => [
        "Nom" => "Arpaci",
        "Prenom" => "Emrah",
        "Sites" => [
            "SitePerso" => "https://2023.webdev-cf2m.be/Emrah/",
            "SitePreformation" => "https://2023.webdev-cf2m.be/Emrah/prefowebsite/",
            "github" => "https://github.com/hack86bx",
        ],
    ],
];
foreach($laura = $webdev_2023_2024["WEBDEV01"] as $key => $value){
    if($key === "Sites"){
        echo "<h3>Sites de ".$laura["Prenom"]." :</h3>";
        foreach($laura["Sites"] as $keySites => $valueSites) echo "<strong>$keySites</strong> : <a href=\"$valueSites\" target=\"_blank\">$valueSites</a><br>";
        continue;
    }
    echo "$key : $value<hr>";
}
