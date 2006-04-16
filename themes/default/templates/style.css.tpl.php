div#<?php echo $prefix; ?>container * {
  border: 0;
  margin: 0;
  padding: 0;
}

div#<?php echo $prefix; ?>container {
  <?php if ($width!="") { ?>width: <?php echo $width; ?>;<?php } ?>
  border: 1px solid #555;
  color: #338822;
  background-color: #d9edd8;
  background-image: url(<?php echo $c->getFileUrlFromTheme('images/shade.gif'); ?>);
  background-position: right;
  background-repeat: repeat-y;
  padding: 10px;
  min-height: 20px;
}

#<?php echo $prefix; ?>minmax {
  cursor: pointer;
}
div#<?php echo $prefix; ?>content_expandable {
  margin-top: 0.2em;
}

div#<?php echo $prefix; ?>channels_content {
  z-index: 20;
  <?php if ($height!="") { ?>height: <?php echo $height; ?>;<?php } ?>
  position: relative;
  width: 100%;
  border-right: 1px solid #555;
  border-left: 1px solid #555;
  border-bottom: 1px solid #555;
  background-color: #e0edde;
  margin-top: 5px;
}
div.<?php echo $prefix; ?>content {
}

/* channels tabpanes */
ul#<?php echo $prefix; ?>channels_list {
  list-style-type: none;
  display: block;
  z-index: 50;
  border-bottom: 1px solid #555;
  margin-bottom: -5px;
}
ul#<?php echo $prefix; ?>channels_list li {
  display: inline;
  margin-left: 5px;
}
ul#<?php echo $prefix; ?>channels_list li div {
  display: inline;
  padding: 0 4px 0 4px;
  border-top: 1px solid #555;
  border-right: 1px solid #555;
  border-left: 1px solid #555;
  border-bottom: 1px solid #555;
  background-color: #7dc073;
}
ul#<?php echo $prefix; ?>channels_list li.selected div {
  background-color: #e0edde;
  border-bottom: 1px solid #e0edde;
  color: #000;
  font-weight: bold;
}
ul#<?php echo $prefix; ?>channels_list li > div:hover {
  background-color: #e0edde;
}
ul#<?php echo $prefix; ?>channels_list li a {
  color: #000;
  text-decoration: none;  
}
ul#<?php echo $prefix; ?>channels_list li a.<?php echo $prefix; ?>tabtitle {
  cursor: pointer;
}
ul#<?php echo $prefix; ?>channels_list li a.<?php echo $prefix; ?>tabtitle img {
  padding-right: 4px;
}
ul#<?php echo $prefix; ?>channels_list li a.<?php echo $prefix; ?>tabclose {
  margin-left: 4px;
  cursor: pointer;
}


div.<?php echo $prefix; ?>chat {
  z-index: 100;
  position: absolute;
  left: 0px;
  top: 0px;
  overflow: auto;
  width: 80%;
  height: 100%;
}

div.<?php echo $prefix; ?>smileys {
  position: absolute;
  bottom: 0;
  right: 0;
  padding: 0;
  width: 20%;
  height: 60%;
  overflow: auto;
  text-align: center;
  border: 1px solid #000;
  background-color: #EEE;
}
div.<?php echo $prefix; ?>online {
  position: absolute;
  right: 0;
  top: 0;
  padding: 0;
  overflow: auto;
  border: black solid 1px;
  color: #000;
  background-color: #DDD;
  width: 20%;
  height: 40%;
}
div.<?php echo $prefix; ?>online ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  margin-left: 8px;
  margin-right: 8px;
}
div.<?php echo $prefix; ?>online li {
  border-bottom: 1px solid #DDD;
  font-weight: bold;
  font-size: 90%;
}

h2#<?php echo $prefix; ?>title {
  font-size: 110%;
}

img#<?php echo $prefix; ?>minmax {
  float: right;
}

.<?php echo $prefix; ?>invisible {
  display: none;
}

div.<?php echo $prefix; ?>message {
  margin: 0;
}
.<?php echo $prefix; ?>words {
  font-size: 90%;
}

div.<?php echo $prefix; ?>oldmsg {
  background-color: #dde4dc;
}

span.<?php echo $prefix; ?>heure, span.<?php echo $prefix; ?>date {
  color: #bebebe;
  font-size: 70%;
}

span.<?php echo $prefix; ?>nick {
  color: #fbac17;
  font-weight: bold;
}

div#<?php echo $prefix; ?>input_container {
  margin-top: 5px;
}

input#<?php echo $prefix; ?>words {
  border: black solid 1px;
  width: 100%;
  height: 1.3em;
}

div#<?php echo $prefix; ?>cmd_container {
  position: relative;
  margin-top: 5px;
  width: 100%;
}

input#<?php echo $prefix; ?>handle {
  border: black solid 1px;
  padding: 0 4px 0 4px;
  color: black;
  <?php if ($nick!="") { ?>background-color: #CCC;<?php } ?>
  text-align: center;
  margin-bottom: 5px;
}

a#<?php echo $prefix; ?>logo {
  position: absolute;
  right: 0;
  top: 0;
}

div.<?php echo $prefix; ?>btn {
  display: inline;  
  cursor: pointer;
}
div.<?php echo $prefix; ?>btn img {
  border: 1px solid #393; /* same as container color */
}
div.<?php echo $prefix; ?>btn img:hover {
  border: 1px solid #000;
}

p#<?php echo $prefix; ?>errors {
  display: none;
  margin-top: 5px;
  padding: 2px;
  height: 18px;

  border: black solid 1px;
  color: #EC4A1F;
  background-color: #FFBA76;
  text-align: center;
  font-style: italic;
  font-weight: bold;
}

/* commands */
.<?php echo $prefix; ?>cmd_msg {
  color: black;
}
.<?php echo $prefix; ?>cmd_me {
  font-style: italic;
  color: black;
}
.<?php echo $prefix; ?>cmd_notice {
  font-style: italic;
  color: #888;
}
pre.<?php echo $prefix; ?>cmd_rehash,
pre.<?php echo $prefix; ?>cmd_help
{
  color: #888;
  font-style: italic;
}

div#<?php echo $prefix; ?>colorlist {
  display: none;
}
img.<?php echo $prefix; ?>color {
  padding: 1px;
  cursor: pointer;
}

.<?php echo $prefix; ?>nickmarker {
  white-space: pre;
}

