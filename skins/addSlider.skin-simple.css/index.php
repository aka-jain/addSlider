<?php include("simple.php"); ?>
*[class^=addui-slider] {
  box-sizing: border-box;
  -moz-box-sizing: border-box;
}
.addui-slider-wrapper {
  display: block;
  margin: <?php size(20);?>;
  margin-top: <?php size(40);?>;
  height: <?php size(20);?>;
}
.addui-slider-track {
  display: block;
  position: relative;
}
.addui-slider-bar {
  display: block;
  width: 100%;
  height: <?php size(2);?>;
  background-color: <?php o('disabled');?>;
}
.addui-slider-handle {
  display: inline-block;
  height: <?php size(40);?>;
  width: <?php size(40);?>;
  position: absolute;
  top: -<?php size(19);?>;
  border-radius: 999999px;
  z-index: 999;
  margin-left: -<?php size(20);?>;
  -webkit-transition: background 0.4s, box-shadow 0.4s;
  transition: background 0.4s, box-shadow 0.4s;
  cursor: pointer;
}
.addui-slider-active .addui-slider-handle,
.addui-slider-activeMin .addui-slider-handle-min,
.addui-slider-activeMax .addui-slider-handle-max {
  background-color: <?php
    $p = Adjust::cssAlpha(g('primary'), -0.75);
    echo $p;
  ?>;
  box-shadow:
    0 0 <?php size(10);?> <?php echo $p;?>;
}
.addui-slider-handle::before {
  display: block;
  content: " ";
  width: <?php size(20);?>;
  height: <?php size(20);?>;
  background-color: <?php o('primary');?>;
  margin: <?php size(10);?>;
  border-radius: 999999px;
}
.addui-slider-value {
  display: inline-block;
  background: <?php o('primary');?>;
  color: <?php text('primary');?>;
  border-radius: 999999px;
  height: auto;
  margin: 0 auto;
  padding: 0;
  text-align: center;
  font-size: 0;
  -webkit-transition: font 0.8s, padding 0.8s;
  transition: font 0.8s, padding 0.8s;
  position: absolute;
  top: -100%;
  left: 50%;
  -webkit-transform: translateX(-50%);
  -ms-transform: translateX(-50%);
  transform: translateX(-50%);
  z-index: 9;
}
.addui-slider-active .addui-slider-value,
.addui-slider-activeMin .addui-slider-handle-min .addui-slider-value,
.addui-slider-activeMin .addui-slider-handle-max .addui-slider-value,
.addui-slider-activeMax .addui-slider-handle-min .addui-slider-value,
.addui-slider-activeMax .addui-slider-handle-max .addui-slider-value {
  font-size: <?php size(18);?>;
  padding: <?php size(8);?>;
}
.addui-slider-value:after,
.addui-slider-handle-min .addui-slider-valueafter,
.addui-slider-handle-max .addui-slider-value:after,
.addui-slider-handle-min .addui-slider-value:after,
.addui-slider-handle-max .addui-slider-value:after {
  content: "";
  display: block;
  position: absolute;
  left: calc(50% - 0px);
  top: 0;
  -webkit-transform: translateX(-50%);
  -ms-transform: translateX(-50%);
  transform: translateX(-50%);
  margin: 0 auto;
  height: 0px;
  width: 0px;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
  background: <?php o('primary');?>;
  z-index: -1;
  pointer-events: none;
  -webkit-transition: opacity 0.8s, top 0.8s, left 0.8s, height 0.8s, width 0.8s;
  transition: opacity 0.8s, top 0.8s, left 0.8s, height 0.8s, width 0.8s;
}
.addui-slider-active .addui-slider-value:after,
.addui-slider-activeMin .addui-slider-handle-min .addui-slider-value:after,
.addui-slider-activeMin .addui-slider-handle-max .addui-slider-value:after,
.addui-slider-activeMax .addui-slider-handle-min .addui-slider-value:after,
.addui-slider-activeMax .addui-slider-handle-max .addui-slider-value:after {
  top: <?php size(30);?>;
  height: <?php size(10);?>;
  width: <?php size(10);?>;
  left: calc(50% - <?php size(5);?>);
}
.addui-slider-activeBar {
  display: block;
  width: 0;
  height: <?php size(2);?>;
  background-color: <?php o('primary');?>;
  max-width: 100%;
  position: absolute;
  box-shadow: 0 0 0 <?php o('primary');?>;
  -webkit-transition: box-shadow 0.4s;
  transition: box-shadow 0.4s;
}
.addui-slider-active .addui-slider-activeBar,
.addui-slider-activeMin .addui-slider-activeBar,
.addui-slider-activeMax .addui-slider-activeBar {
  box-shadow: 0 0 <?php size(2);?> <?php o('primary');?>;
}
