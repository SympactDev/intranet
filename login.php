<?php
 goto H4Nqj; zTcJf: if ($_SERVER["\x52\105\x51\125\x45\x53\124\x5f\x4d\105\124\110\117\x44"] == "\x50\x4f\123\124") { if (trim($_POST["\x75\x73\x65\162\x6e\141\155\x65"]) == NULL) { Header("\x4c\157\143\141\x74\x69\x6f\x6e\72\x6c\x6f\x67\151\x6e\77\145\162\162\157\162"); } if (trim($_POST["\x70\x61\163\x73\167\x6f\162\x64"]) == NULL) { Header("\114\157\x63\141\164\x69\157\x6e\72\x6c\157\x67\151\x6e\x3f\x65\162\162\157\162"); } $query = $con->query("\x53\105\114\x45\103\124\x20\x2a\x20\x46\x52\117\115\x20\165\x73\145\x72\x73\40\x57\x48\x45\122\105\x20\x75\x73\145\x72\x6e\x61\x6d\145\x20\75\40\47" . $con->real_escape_string($_POST["\x75\163\145\162\156\x61\x6d\145"]) . "\47"); if ($query->num_rows == 1) { $row = $query->fetch_assoc(); if (password_verify($_POST["\x70\141\163\x73\x77\x6f\162\144"], $row["\x70\141\163\163\x77\x6f\162\144"])) { $_SESSION["\154\157\147\147\145\x64\x69\156"] = true; $_SESSION["\165\x73\145\162\x6e\141\155\x65"] = $_POST["\x75\163\x65\x72\x6e\141\x6d\145"]; $_SESSION["\x72\157\154\145"] = $row["\162\x6f\x6c\145"]; $_SESSION["\x6e\141\155\145"] = $row["\x6e\x61\155\x65"]; $_SESSION["\x72\x61\156\153"] = $row["\x72\141\156\153"]; $_SESSION["\x69\144"] = $row["\x69\x64"]; $_SESSION["\160\145\162\x73\157\156\151\x64"] = NULL; $_SESSION["\162\x65\x70\x6f\x72\164\x69\144"] = NULL; $con->query("\125\120\104\101\124\x45\x20\165\163\x65\162\x73\x20\x53\x45\124\40\154\141\x73\x74\137\x6c\x6f\147\151\x6e\40\75\x20\x27" . date("\131\x2d\x6d\55\144") . "\x27\40\127\x48\x45\122\x45\40\151\144\x20\x3d\x20\x27" . $row["\151\x64"] . "\47"); if ($_SERVER["\x48\124\124\x50\137\x52\x45\x46\x46\105\122"] != '') { header("\x4c\157\x63\x61\x74\151\157\156\x3a\40" . $_SERVER["\110\124\124\x50\x5f\x52\105\106\x45\122\x45\122"]); } else { Header("\x4c\157\x63\141\x74\x69\157\156\72\40\144\141\163\x68\x62\x6f\141\162\144\156\x65\x77"); } } else { Header("\x4c\157\x63\141\x74\x69\157\x6e\x3a\x20\154\157\147\151\156\77\145\162\162\x6f\162"); } } else { Header("\x4c\157\143\141\164\151\157\x6e\x3a\x20\x6c\x6f\x67\x69\156\x3f\x65\x72\162\x6f\x72"); } } goto vs5qc; NrJRN: ?>
) no-repeat}</style><meta charset="utf-8"><meta content="width=device-width,initial-scale=1,shrink-to-fit=no"name="viewport"><meta content=""name="description"><meta content=""name="author"><link href="https://www.politie.nl/politie2018/assets/images/icons/favicon.ico"rel="shortcut icon"type="image/x-icon"><link href="https://www.politie.nl/politie2018/assets/images/icons/favicon-16.png"rel="icon"type="image/png"sizes="16x16"><link href="https://www.politie.nl/politie2018/assets/images/icons/favicon-32.png"rel="icon"type="image/png"sizes="32x32"><link href="https://www.politie.nl/politie2018/assets/images/icons/favicon-64.png"rel="icon"type="image/png"sizes="64x64"><title>Intranet</title><link href="https://getbootstrap.com/docs/4.0/examples/starter-template/"rel="canonical"><link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"rel="stylesheet"crossorigin="anonymous"integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"><link href="assets/css/main.css"rel="stylesheet"><link href="assets/css/login.css"rel="stylesheet"></head><body><nav class="bg-custom fixed-top navbar navbar-custom navbar-expand-lg"><div class="collapse navbar-collapse"id="navbarsExampleDefault"><ul class="mr-auto navbar-nav"><li class="nav-item"><a class="nav-label"href="#"><img alt=""height="22"src="assets/images/icon.png"width="22"> <span class="title">Log in om verder te gaan..</span></a></li></ul></div></nav><main class="container"role="main"><div class="login-container"><div class="login-content"><h4><strong>Log In</strong></h4><hr><?php  goto KW0wM; kdZet: echo $selectedBg; goto NrJRN; bpn9D: $selectedBg = "{$bg[$i]}"; goto qP46Y; qP46Y: ?>
<!doctypehtml><html lang="en"><head><style type="text/css">body{background:url(assets/images/login/<?php  goto kdZet; U7We3: $i = rand(0, count($bg) - 1); goto bpn9D; KW0wM: if (isset($_GET["\145\162\162\157\162"])) { ?>
<p style="color:#9f1010">Verkeerde inlog gegevens!</p><?php  } goto lqdAg; vs5qc: $bg = array("\x70\157\154\x69\164\151\x65\61\x2e\x6a\x70\x65\147", "\160\x6f\154\x69\x74\x69\x65\x34\x2e\152\x70\145\147", "\160\x6f\x6c\x69\164\x69\x65\x35\x2e\152\160\145\x67"); goto U7We3; H4Nqj: require "\x72\x65\161\165\x69\x72\x65\163\57\143\x6f\x6e\146\x69\147\56\160\150\160"; goto zTcJf; lqdAg: ?>
<form method="post"><div class="input-group mb-3"><input class="form-control login-user"name="username"placeholder="Gebruikersnaam"value=""></div><div class="input-group mb-2"><input class="form-control login-pass"name="password"placeholder="Wachtwoord"value=""type="password"></div><div class="form-group"><button class="btn btn-login btn-primary"name="login"type="submit">Log in</button></div></form></div></div></main><script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"crossorigin="anonymous"integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"crossorigin="anonymous"integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"></script><script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"crossorigin="anonymous"integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"></script><script src="assets/js/main.js"></script></body></html>