<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        TestMyLab
    </title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="{{url('/')}}/assets/css/bootstrap.min.css" rel="stylesheet" />

</head>
<body>

<nav class="navbar navbar-expand-md fixed-top" style="background-color: #E9E6E6;">


    <img src="/image/logo1.png" width="70" height="50" />
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="bouton1" href="/accueil">Accueil<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="bouton2" target="_blank" href="/conseil">Conseil<span  class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="bouton3" target="_blank" href="/schema">Schéma<span  class="sr-only">(current)</span></a>
            </li>
        </ul>
    </div>
</nav>
<style>
html {
-webkit-print-color-adjust: exact;
}
* {
box-sizing: border-box;
-webkit-print-color-adjust: exact;
}

html,
body {
margin: 0;
padding: 0;
}
@media only screen {
body {
margin: 2em auto;
max-width: 900px;
color: rgb(55, 53, 47);
}
}

body {
line-height: 1.5;
white-space: pre-wrap;
}

a,
a.visited {
color: inherit;
text-decoration: underline;
}

.pdf-relative-link-path {
font-size: 80%;
color: #444;
}

h1,
h2,
h3 {
letter-spacing: -0.01em;
line-height: 1.2;
font-weight: 600;
margin-bottom: 0;
}

.page-title {
font-size: 2.5rem;
font-weight: 700;
margin-top: 0;
margin-bottom: 0.75em;
}

h1 {
font-size: 1.875rem;
margin-top: 1.875rem;
}

h2 {
font-size: 1.5rem;
margin-top: 1.5rem;
}

h3 {
font-size: 1.25rem;
margin-top: 1.25rem;
}

.source {
border: 1px solid #ddd;
border-radius: 3px;
padding: 1.5em;
word-break: break-all;
}

.callout {
border-radius: 3px;
padding: 1rem;
}

figure {
margin: 1.25em 0;
page-break-inside: avoid;
}

figcaption {
opacity: 0.5;
font-size: 85%;
margin-top: 0.5em;
}

mark {
background-color: transparent;
}

.indented {
padding-left: 1.5em;
}

hr {
background: transparent;
display: block;
width: 100%;
height: 1px;
visibility: visible;
border: none;
border-bottom: 1px solid rgba(55, 53, 47, 0.09);
}

img {
max-width: 100%;
}

@media only print {
img {
max-height: 100vh;
object-fit: contain;
}
}

@page {
margin: 1in;
}

.collection-content {
font-size: 0.875rem;
}

.column-list {
display: flex;
justify-content: space-between;
}

.column {
padding: 0 1em;
}

.column:first-child {
padding-left: 0;
}

.column:last-child {
padding-right: 0;
}

.table_of_contents-item {
display: block;
font-size: 0.875rem;
line-height: 1.3;
padding: 0.125rem;
}

.table_of_contents-indent-1 {
margin-left: 1.5rem;
}

.table_of_contents-indent-2 {
margin-left: 3rem;
}

.table_of_contents-indent-3 {
margin-left: 4.5rem;
}

.table_of_contents-link {
text-decoration: none;
opacity: 0.7;
border-bottom: 1px solid rgba(55, 53, 47, 0.18);
}

table,
th,
td {
border: 1px solid rgba(55, 53, 47, 0.09);
border-collapse: collapse;
}

table {
border-left: none;
border-right: none;
}

th,
td {
font-weight: normal;
padding: 0.25em 0.5em;
line-height: 1.5;
min-height: 1.5em;
text-align: left;
}

th {
color: rgba(55, 53, 47, 0.6);
}





.to-do-children-checked {
text-decoration: line-through;
opacity: 0.375;
}



ol {
padding-inline-start: 1.6em;
}

ol > li {
padding-left: 0.2em;
}

.mono ol {
padding-inline-start: 2em;
}

.mono ol > li {
text-indent: -0.4em;
}

.toggle {
padding-inline-start: 0em;
list-style-type: none;
}

/* Indent toggle children */
.toggle > li > details {
padding-left: 1.7em;
}

.toggle > li > details > summary {
margin-left: -1.1em;
}

.selected-value {
display: inline-block;
padding: 0 0.5em;
background: rgba(206, 205, 202, 0.5);
border-radius: 3px;
margin-right: 0.5em;
margin-top: 0.3em;
margin-bottom: 0.3em;
white-space: nowrap;
}

.collection-title {
display: inline-block;
margin-right: 1em;
}

time {
opacity: 0.5;
}

.icon {
display: inline-block;
max-width: 1.2em;
max-height: 1.2em;
text-decoration: none;
vertical-align: text-bottom;
margin-right: 0.5em;
}

img.icon {
border-radius: 3px;
}

.user-icon {
width: 1.5em;
height: 1.5em;
border-radius: 100%;
margin-right: 0.5rem;
}

.user-icon-inner {
font-size: 0.8em;
}

.text-icon {
border: 1px solid #000;
text-align: center;
}

.page-cover-image {
display: block;
object-fit: cover;
width: 100%;
height: 30vh;
}

.page-header-icon {
font-size: 3rem;
margin-bottom: 1rem;
}

.page-header-icon-with-cover {
margin-top: -0.72em;
margin-left: 0.07em;
}

.page-header-icon img {
border-radius: 3px;
}

.link-to-page {
margin: 1em 0;
padding: 0;
border: none;
font-weight: 500;
}

p > .user {
opacity: 0.5;
}

td > .user,
td > time {
white-space: nowrap;
}

input[type="checkbox"] {
transform: scale(1.5);
margin-right: 0.6em;
vertical-align: middle;
}

p {
margin-top: 0.5em;
margin-bottom: 0.5em;
}

.image {
border: none;
margin: 1.5em 0;
padding: 0;
border-radius: 0;
text-align: center;
}

.code,
code {
background: rgba(135, 131, 120, 0.15);
border-radius: 3px;
padding: 0.2em 0.4em;
border-radius: 3px;
font-size: 85%;
tab-size: 2;
}

code {
color: #eb5757;
}

.code {
padding: 1.5em 1em;
}

.code-wrap {
white-space: pre-wrap;
word-break: break-all;
}

.code > code {
background: none;
padding: 0;
font-size: 100%;
color: inherit;
}

blockquote {
font-size: 1.25em;
margin: 1em 0;
padding-left: 1em;
border-left: 3px solid rgb(55, 53, 47);
}

.bookmark {
text-decoration: none;
max-height: 8em;
padding: 0;
display: flex;
width: 100%;
align-items: stretch;
}

.bookmark-title {
font-size: 0.85em;
overflow: hidden;
text-overflow: ellipsis;
height: 1.75em;
white-space: nowrap;
}

.bookmark-text {
display: flex;
flex-direction: column;
}

.bookmark-info {
flex: 4 1 180px;
padding: 12px 14px 14px;
display: flex;
flex-direction: column;
justify-content: space-between;
}

.bookmark-image {
width: 33%;
flex: 1 1 180px;
display: block;
position: relative;
object-fit: cover;
border-radius: 1px;
}

.bookmark-description {
color: rgba(55, 53, 47, 0.6);
font-size: 0.75em;
overflow: hidden;
max-height: 4.5em;
word-break: break-word;
}

.bookmark-href {
font-size: 0.75em;
margin-top: 0.25em;
}

.sans { font-family: ui-sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, "Apple Color Emoji", Arial, sans-serif, "Segoe UI Emoji", "Segoe UI Symbol"; }
.code { font-family: "SFMono-Regular", Menlo, Consolas, "PT Mono", "Liberation Mono", Courier, monospace; }
.serif { font-family: Lyon-Text, Georgia, ui-serif, serif; }
.mono { font-family: iawriter-mono, Nitti, Menlo, Courier, monospace; }
.pdf .sans { font-family: Inter, ui-sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, "Apple Color Emoji", Arial, sans-serif, "Segoe UI Emoji", "Segoe UI Symbol", 'Twemoji', 'Noto Color Emoji', 'Noto Sans CJK JP'; }
.pdf:lang(zh-CN) .sans { font-family: Inter, ui-sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, "Apple Color Emoji", Arial, sans-serif, "Segoe UI Emoji", "Segoe UI Symbol", 'Twemoji', 'Noto Color Emoji', 'Noto Sans CJK SC'; }
.pdf:lang(zh-TW) .sans { font-family: Inter, ui-sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, "Apple Color Emoji", Arial, sans-serif, "Segoe UI Emoji", "Segoe UI Symbol", 'Twemoji', 'Noto Color Emoji', 'Noto Sans CJK TC'; }
.pdf:lang(ko-KR) .sans { font-family: Inter, ui-sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, "Apple Color Emoji", Arial, sans-serif, "Segoe UI Emoji", "Segoe UI Symbol", 'Twemoji', 'Noto Color Emoji', 'Noto Sans CJK KR'; }
.pdf .code { font-family: Source Code Pro, "SFMono-Regular", Menlo, Consolas, "PT Mono", "Liberation Mono", Courier, monospace, 'Twemoji', 'Noto Color Emoji', 'Noto Sans Mono CJK JP'; }
.pdf:lang(zh-CN) .code { font-family: Source Code Pro, "SFMono-Regular", Menlo, Consolas, "PT Mono", "Liberation Mono", Courier, monospace, 'Twemoji', 'Noto Color Emoji', 'Noto Sans Mono CJK SC'; }
.pdf:lang(zh-TW) .code { font-family: Source Code Pro, "SFMono-Regular", Menlo, Consolas, "PT Mono", "Liberation Mono", Courier, monospace, 'Twemoji', 'Noto Color Emoji', 'Noto Sans Mono CJK TC'; }
.pdf:lang(ko-KR) .code { font-family: Source Code Pro, "SFMono-Regular", Menlo, Consolas, "PT Mono", "Liberation Mono", Courier, monospace, 'Twemoji', 'Noto Color Emoji', 'Noto Sans Mono CJK KR'; }
.pdf .serif { font-family: PT Serif, Lyon-Text, Georgia, ui-serif, serif, 'Twemoji', 'Noto Color Emoji', 'Noto Serif CJK JP'; }
.pdf:lang(zh-CN) .serif { font-family: PT Serif, Lyon-Text, Georgia, ui-serif, serif, 'Twemoji', 'Noto Color Emoji', 'Noto Serif CJK SC'; }
.pdf:lang(zh-TW) .serif { font-family: PT Serif, Lyon-Text, Georgia, ui-serif, serif, 'Twemoji', 'Noto Color Emoji', 'Noto Serif CJK TC'; }
.pdf:lang(ko-KR) .serif { font-family: PT Serif, Lyon-Text, Georgia, ui-serif, serif, 'Twemoji', 'Noto Color Emoji', 'Noto Serif CJK KR'; }
.pdf .mono { font-family: PT Mono, iawriter-mono, Nitti, Menlo, Courier, monospace, 'Twemoji', 'Noto Color Emoji', 'Noto Sans Mono CJK JP'; }
.pdf:lang(zh-CN) .mono { font-family: PT Mono, iawriter-mono, Nitti, Menlo, Courier, monospace, 'Twemoji', 'Noto Color Emoji', 'Noto Sans Mono CJK SC'; }
.pdf:lang(zh-TW) .mono { font-family: PT Mono, iawriter-mono, Nitti, Menlo, Courier, monospace, 'Twemoji', 'Noto Color Emoji', 'Noto Sans Mono CJK TC'; }
.pdf:lang(ko-KR) .mono { font-family: PT Mono, iawriter-mono, Nitti, Menlo, Courier, monospace, 'Twemoji', 'Noto Color Emoji', 'Noto Sans Mono CJK KR'; }
.highlight-default {
}
.highlight-gray {
color: rgb(155,154,151);
}
.highlight-brown {
color: rgb(100,71,58);
}
.highlight-orange {
color: rgb(217,115,13);
}
.highlight-yellow {
color: rgb(223,171,1);
}
.highlight-teal {
color: rgb(15,123,108);
}
.highlight-blue {
color: rgb(11,110,153);
}
.highlight-purple {
color: rgb(105,64,165);
}
.highlight-pink {
color: rgb(173,26,114);
}
.highlight-red {
color: rgb(224,62,62);
}
.highlight-gray_background {
background: rgb(235,236,237);
}
.highlight-brown_background {
background: rgb(233,229,227);
}
.highlight-orange_background {
background: rgb(250,235,221);
}
.highlight-yellow_background {
background: rgb(251,243,219);
}
.highlight-teal_background {
background: rgb(221,237,234);
}
.highlight-blue_background {
background: rgb(221,235,241);
}
.highlight-purple_background {
background: rgb(234,228,242);
}
.highlight-pink_background {
background: rgb(244,223,235);
}
.highlight-red_background {
background: rgb(251,228,228);
}
.block-color-default {
color: inherit;
fill: inherit;
}
.block-color-gray {
color: rgba(55, 53, 47, 0.6);
fill: rgba(55, 53, 47, 0.6);
}
.block-color-brown {
color: rgb(100,71,58);
fill: rgb(100,71,58);
}
.block-color-orange {
color: rgb(217,115,13);
fill: rgb(217,115,13);
}
.block-color-yellow {
color: rgb(223,171,1);
fill: rgb(223,171,1);
}
.block-color-teal {
color: rgb(15,123,108);
fill: rgb(15,123,108);
}
.block-color-blue {
color: rgb(11,110,153);
fill: rgb(11,110,153);
}
.block-color-purple {
color: rgb(105,64,165);
fill: rgb(105,64,165);
}
.block-color-pink {
color: rgb(173,26,114);
fill: rgb(173,26,114);
}
.block-color-red {
color: rgb(224,62,62);
fill: rgb(224,62,62);
}
.block-color-gray_background {
background: rgb(235,236,237);
}
.block-color-brown_background {
background: rgb(233,229,227);
}
.block-color-orange_background {
background: rgb(250,235,221);
}
.block-color-yellow_background {
background: rgb(251,243,219);
}
.block-color-teal_background {
background: rgb(221,237,234);
}
.block-color-blue_background {
background: rgb(221,235,241);
}
.block-color-purple_background {
background: rgb(234,228,242);
}
.block-color-pink_background {
background: rgb(244,223,235);
}
.block-color-red_background {
background: rgb(251,228,228);
}
.select-value-color-default { background-color: rgba(206,205,202,0.5); }
.select-value-color-gray { background-color: rgba(155,154,151, 0.4); }
.select-value-color-brown { background-color: rgba(140,46,0,0.2); }
.select-value-color-orange { background-color: rgba(245,93,0,0.2); }
.select-value-color-yellow { background-color: rgba(233,168,0,0.2); }
.select-value-color-green { background-color: rgba(0,135,107,0.2); }
.select-value-color-blue { background-color: rgba(0,120,223,0.2); }
.select-value-color-purple { background-color: rgba(103,36,222,0.2); }
.select-value-color-pink { background-color: rgba(221,0,129,0.2); }
.select-value-color-red { background-color: rgba(255,0,26,0.2); }

.checkbox {
display: inline-flex;
vertical-align: text-bottom;
width: 16;
height: 16;
background-size: 16px;
margin-left: 2px;
margin-right: 5px;
}

.checkbox-on {
background-image: url("data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2216%22%20height%3D%2216%22%20viewBox%3D%220%200%2016%2016%22%20fill%3D%22none%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%0A%3Crect%20width%3D%2216%22%20height%3D%2216%22%20fill%3D%22%2358A9D7%22%2F%3E%0A%3Cpath%20d%3D%22M6.71429%2012.2852L14%204.9995L12.7143%203.71436L6.71429%209.71378L3.28571%206.2831L2%207.57092L6.71429%2012.2852Z%22%20fill%3D%22white%22%2F%3E%0A%3C%2Fsvg%3E");
}

.checkbox-off {
background-image: url("data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2216%22%20height%3D%2216%22%20viewBox%3D%220%200%2016%2016%22%20fill%3D%22none%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%0A%3Crect%20x%3D%220.75%22%20y%3D%220.75%22%20width%3D%2214.5%22%20height%3D%2214.5%22%20fill%3D%22white%22%20stroke%3D%22%2336352F%22%20stroke-width%3D%221.5%22%2F%3E%0A%3C%2Fsvg%3E");
}

</style><article id="1e264850-698f-4da9-8552-350dd1b18d8d" class="page sans"><header><img class="page-cover-image" src="https://images.unsplash.com/photo-1611329857570-f02f340e7378?ixlib=rb-1.2.1&amp;q=85&amp;fm=jpg&amp;crop=entropy&amp;cs=srgb" style="object-position:center 50%"/><div class="page-header-icon page-header-icon-with-cover"><span class="icon">⚠️</span></div><h1 class="page-title">Problèmes</h1></header><div class="page-body"><h1 id="dd7eb8cd-2a33-4004-9226-0906f7e688f3" class="">Routeur</h1><h3 id="d445d386-b4fc-4c78-aea2-7353ef2615bf" class=""><strong>Causes de lenteur du réseau</strong></h3><h3 id="e21a33d4-eb44-43b2-a624-c2a5d731187e" class=""><strong>Perte de paquets</strong></h3><p id="3687261c-87bc-4976-b290-8edc2949a8ed" class="">Dans la plupart des cas, un réseau est considéré comme lent lorsque les protocoles de couche supérieure (applications) nécessitent un délai plus long pour mener à bien une opération généralement plus rapide. Cette lenteur est causée par la perte de certains paquets sur le réseau, ce qui provoque l&#x27;expiration des protocoles de niveau supérieur tels que TCP ou les applications et le déclenchement de la retransmission.</p><h3 id="48c2a1f9-6bad-4ed7-a08b-5de71b44b841" class=""><strong>Connectivité inter-VLAN lente (transfert lent entre VLAN)</strong></h3><p id="f4fc7789-f2e0-49e2-8bd8-c387417da9bd" class="">La connectivité inter-VLAN lente (transmission lente entre VLAN) se produit lorsqu’il n’y a pas de lenteur sur le VLAN local, mais le trafic doit être transféré à un VLAN alternatif, et il n’est pas transféré à la vitesse prévue.</p><h1 id="9817b7c4-a98e-4a00-a620-9025a2312541" class="">Switch</h1><p id="e73dd2b0-8ad6-4054-8355-805148e38035" class=""><span style="border-bottom:0.05em solid"><strong>Tempête de broadcast </strong></span></p><figure id="377c1dd4-7471-4142-982b-27b0b6993603" class="image"><a href="Proble%CC%80mes%20377c1dd474714142982b27b0b6993603/Untitled.png"><img style="width:779px" src="/assets/problemes.png"/></a></figure><p id="045513ec-69e2-4a0a-b928-46ad40aa726e" class="">Si le PC envoie un message de broadcast, le switch 4 va recevoir la trame du pc et la diffuser sur tous ses ports comme toute adresse de broadcast. </p><p id="224ad161-8f3b-4e0a-a7f8-cf223c678ca0" class="">Les switchs 2 et 3 reçoivent donc aussi la trame du PC et ils vont la diffuser sur tous les ports envoyant le message au switch 1 mais aussi au switch 4 qui vient de leur envoyer.</p><p id="859e1a39-7568-44ab-8d1d-3f00efffc7dd" class="">En gros dans une infrastructure comme celle-ci les 4 switchs vont s&#x27;envoyer en permanence la trame DHCP du PC qui peuvent provoquer une augmentation de l&#x27;activité des CPUs de ces switchs et paralyser totalement un réseau d&#x27;entreprise.</p><p id="85ba7fcb-e8ad-46c4-b425-79aa7b43f670" class=""><span style="border-bottom:0.05em solid"><strong>Recommandation matériel </strong></span></p><p id="4b096a29-f04f-4b44-9855-e759aaa43da2" class="">L&#x27;objectif  au niveau matériel est d&#x27;avoir une architecture robuste qui permet d&#x27;avoir des coupures physiques, des pertes de switchs sans avoir toute l&#x27;infrastructure hors service.</p><p id="841a8286-2bdc-4275-841b-3c198f90dd17" class="">On pourrait proposer la sécurisation des liens LACP en mettant en place plusieurs liens entre les switchs.</p><p id="3ba0c2dc-8449-483b-b4c2-ffcfbbc52f0d" class="">On pourrait avoir moins de switchs à gérer en les empilant ce qui faciliterai leur administration.</p><p id="32f10744-69ca-4996-8e1c-5391716ed383" class="">Au niveau sécurisation électrique, on peut doter les switchs de deux alimentations électrique.</p><h1 id="a1c5d217-acba-4dfa-a28b-cc001e1e3950" class="">Firewall</h1><p id="9469922b-2dc2-492c-a211-320413d425b1" class="">Il servira avant à définir des règles de redirection de port, de blocage d&#x27;accès à certains sites ou bien encore d&#x27;établir une connexion entre machines. </p><p id="a91222ba-1d5b-43d9-b6e9-c68547bee1f4" class="">On pourra aussi l&#x27;utiliser afin de filtrer les spams de mails, il sera alors mis en quarantaine et mis dans les logs puis supprimé à une date défini. </p><p id="28222c80-2dba-4d13-a0a7-1ad52ff2fcac" class="">Le firewall permettra aussi de bloquer les attaques anti DdoS, pour cela on mettra en place une règle de NAT afin de bloquer toutes les paquets entrants. </p><p id="17f21028-2d3e-4498-9ce1-30a99f02bd92" class="">Configuration en fonction des besoins.</p><p id="3f2e7b75-2ca4-4cb0-9755-796366142905" class="">Une erreur classique est de configurer une règle avec le protocole UDP à la place de TCP ou inversement.</p><h1 id="8ea4a411-8efc-4253-b532-05ea20658aac" class="">Serveur</h1><p id="636aeca4-3f81-4fbd-887d-4e7f62cf7380" class="">Les causes de problèmes les plus récurrentes concernent généralement des logiciels métiers, en effet ces derniers demandent beaucoup d&#x27;espace de stockage. Cela provoque bien souvent une saturation de l&#x27;espace de stockage et rend donc le serveur inutilisable. </p><p id="41fbd1fd-ecdb-4cd1-840c-b1b8cb441113" class="">La mémoire de CPU peut aussi poser problème, il est à ce moment là saturé et ne peut donc plus être utilisable pour effectuer d&#x27;autre tâche. </p><p id="a0ac060b-eeb2-40d3-90d9-1f1e238e0fa7" class="">Un serveur est un élément sensible du réseau de l&#x27;entreprise, il faut donc le protéger au maximum de tous types d&#x27;attaques afin qu&#x27;il reste opérationnel. De plus en plus les entreprises sont la cible de cyberattaques, il faut donc anticipé ces attaques en mettant en place des outils et des éléments pour les contrer. </p><p id="8b8673e4-e2bd-40e4-b318-75d3b6ccb46e" class="">Le mot de passe d&#x27;accès au serveur doit être assez fort pour ne pas être décrypter ou devinez par un brute force. Les recommandations sont donc d&#x27;utiliser minimum 12 caractères avec des majuscule, minuscules, chiffres et caractères spéciaux. </p><p id="f432cbd5-b8e3-48f5-8701-7d8a758a0881" class="">Un des objectifs est aussi de faire de l’agrégation de liens sur tous les serveurs important ainsi que sur les liens de transport. L’agrégation de liens permet le regroupement de plusieurs ports réseaux et de les utiliser comme s’il s’agissait d’un seul.
            L’agrégation de lien va nous permettre dans un premier temps d’augmenter le débit, vu que nous allons regrouper deux ports. Au niveau de la bande passante, on passera à deux fois 1Gb/s et pas une fois 1Gb/s ce qui permet quand même de doubler nos performances (en fonction des performances des switchs).
            Dans un second temps, elle nous apporte de la tolérance de panne. En effet, si un des deux câbles de l’agrégat venait à être rompu ou que l’un des ports tombait en panne, il resterait un port pour assurer la connectivité.</p><p id="726c98d8-dc5f-4dfd-81a0-20fcfd432b79" class="">
        </p></div></article>
</body>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="{{ url('/') }}/assets/js/jquery-3.6.0.min.js"></script>
<script src="{{ url('/') }}/assets/js/bootstrap.min.js"></script>
<script src="{{ asset('js/app.js') }}"></script>

</html>

