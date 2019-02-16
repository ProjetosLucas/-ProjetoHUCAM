<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Image $image
 */
$dir='exames/';//Modifiquei Aqui
?>
<html>
<head>
<script type="text/javascript" src="http://www.walterzorn.de/en/scripts/wz_jsgraphics.js"></script>
</head>
<body>  
      <form action="">
        <table cellspacing="0">
          <tr>
            <td><input style="width:100%" type="button" value="drawLine()" onclick="DRAW(this.value)"></td>
            <td>x1<input name="dl_x1" type="text" size="5" maxlength="4" value="50">&nbsp;</td>
            <td>y1<input name="dl_y1" type="text" size="5" maxlength="4" value="-330">&nbsp;</td>
            <td>x2<input name="dl_x2" type="text" size="5" maxlength="4" value="500">&nbsp;</td>
            <td>y2<input name="dl_y2" type="text" size="5" maxlength="4" value="800">&nbsp;</td>
          </tr>
          <tr align="right">
            <td><input style="width:100%" type="button" value="drawRect()" onclick="DRAW(this.value)"></td>
            <td>x<input name="dr_x" type="text" size="5" maxlength="4" value="130">&nbsp;</td>
            <td>y<input name="dr_y" type="text" size="5" maxlength="4" value="20">&nbsp;</td>
            <td>w<input name="dr_w" type="text" size="5" maxlength="4" value="350">&nbsp;</td>
            <td>h<input name="dr_h" type="text" size="5" maxlength="4" value="60">&nbsp;</td>
            <td><br></td>
            <td><br></td>
          </tr>
          <tr align="right">
            <td><input style="width:100%" type="button" value="fillRect()" onclick="DRAW(this.value)"></td>
            <td>x<input name="fr_x" type="text" size="5" maxlength="4" value="-70">&nbsp;</td>
            <td>y<input name="fr_y" type="text" size="5" maxlength="4" value="130">&nbsp;</td>
            <td>w<input name="fr_w" type="text" size="5" maxlength="4" value="160">&nbsp;</td>
            <td>h<input name="fr_h" type="text" size="5" maxlength="4" value="100">&nbsp;</td>
            <td><br></td>
            <td><br></td>
          </tr>
          <tr align="left">
            <td align="right"><input type="button" value="fillPolygon()" onclick="DRAW(this.value)"></td>
            <td colspan="6">
              x<input name="fp_x" type="text" size="25" value="80,126,-30,-60">&nbsp;y<input name="fp_y" type="text" size="25" value="0,130,40,100">
            </td>
          </tr>
          <tr align="right">
            <td><input style="width:100%" type="button" value="drawEllipse()" onclick="DRAW(this.value)"></td>
            <td>x<input name="do_x" type="text" size="5" maxlength="4" value="320">&nbsp;</td>
            <td>y<input name="do_y" type="text" size="5" maxlength="4" value="-20">&nbsp;</td>
            <td>w<input name="do_w" type="text" size="5" maxlength="3" value="250">&nbsp;</td>
            <td>h<input name="do_h" type="text" size="5" maxlength="4" value="140">&nbsp;</td>
            <td><br></td>
            <td><br></td>
          </tr>
          <tr align="right">
            <td><input style="width:100%" type="button" value="fillEllipse()" onclick="DRAW(this.value)"></td>
            <td>x<input name="fo_x" type="text" size="5" maxlength="4" value="75">&nbsp;</td>
            <td>y<input name="fo_y" type="text" size="5" maxlength="4" value="140">&nbsp;</td>
            <td>w<input name="fo_w" type="text" size="5" maxlength="3" value="240">&nbsp;</td>
            <td>h<input name="fo_h" type="text" size="5" maxlength="4" value="400">&nbsp;</td>
            <td><br></td>
            <td><br></td>
          </tr>
          <tr align="right">
            <td><input style="width:100%" type="button" value="fillArc()" onclick="DRAW(this.value)"></td>
            <td>x<input name="fa_x" type="text" size="5" maxlength="4" value="350">&nbsp;</td>
            <td>y<input name="fa_y" type="text" size="5" maxlength="4" value="140">&nbsp;</td>
            <td>w<input name="fa_w" type="text" size="5" maxlength="4" value="240">&nbsp;</td>
            <td>h<input name="fa_h" type="text" size="5" maxlength="4" value="400">&nbsp;</td>
            <td>arc&nbsp;begin<input name="fa_angA" type="text" size="5" maxlength="6" value="25">&deg;</td>
            <td>arc&nbsp;end<input name="fa_angZ" type="text" size="5" maxlength="6" value="290">&deg;</td>
          </tr>
          <tr>
            <td colspan="7">
              <table width="100%" cellpadding="0" cellspacing="0">
                <tr>
                  <td>
                    setColor(&quot;#<input name="Color" type="text" size="7" maxlength="6" value="00aaaa">&quot;)
                  </td>
                  <td align="center">
                    setStroke(<input name="Stroke" type="text" size="3" maxlength="2" value="4">)
                  </td>
                  <td align="right">
                    setStroke(Stroke.DOTTED<input name="Dotted" type="checkbox">)
                  </td>
                </tr>
              </table>
              <input type="button" style="font-weight:bold;width:290px;" value="clear() Diese Zeichenfl&auml;che l&ouml;schen" onclick=";if(jg2)jg2.clear();">
            </td>
          </tr>
          <tr>
                    <td colspan="5" height="250" valign="top"><div id="test" style="position:relative;left:0px;top:0px;width:400px;height:250px;z-index:2;overflow:visible;">
                        <div><?php  //Modifiquei Aqui
                        $var = '<img src="/Projeto/projeto/'.$dir.$image->file_name.'" alt=""/>'; 
                        echo $var;?></div>
                    </div></td>            
          </tr>
        </table>
    </form>
  <hr width="95%" size="1" noshade>
   
<script type="text/javascript">
<!--
var no_dhtm = (document.layers || window.opera && !document.defaultView);



function ZOOM()
{
    if (document.body && document.body.style && typeof document.body.style.zoom != "undefined")
    {
        if (document.body.style.zoom=="400%")
            document.body.style.zoom = "100%";
        else
        {
            document.body.style.zoom = "400%";
            alert('Sie haben auf das Dokument doppelgeklickt.\nDoppelklicken Sie nochmals, wenn Sie zur Normalansicht zurckschalten wollen.');
        }
    }
}
document.ondblclick=ZOOM;



function DRAW(shape)
{
    if (window.opera && !document.defaultView)
    {
        alert('Im Netscape 4 und Opera ï¿½ter als Version 7\nsteht die Funktion "Nachtrï¿½lich zeichnen" nicht zur Verfgung.\nDiese Browser kï¿½nen nur beim Laden in die Seite zeichnen, spï¿½er nicht mehr\n(Netscape 4: mangelnde Stabilitï¿½).');
        return;
    }


    if (window.event) event.cancelBubble = true;
    var f=document.forms[0];

    var color = f.Color.value;
    for (var z = 0; z<color.length; z++)
        if (isNaN(parseInt(color.charAt(z), 16)))
            color = color.substring(0, z) + '6' + color.substring(z+1);




var t0 = (new Date()).getTime();

    //jg2.setPrintable(true);
    jg2.setColor("#"+color);
    jg2.setStroke(f.Dotted.checked? Stroke.DOTTED : parseInt(f.Stroke.value));

    if (shape=="drawLine()")
        jg2.drawLine(parseInt(f.dl_x1.value), parseInt(f.dl_y1.value), parseInt(f.dl_x2.value), parseInt(f.dl_y2.value));
    else if (shape=="drawRect()")
        jg2.drawRect(parseInt(f.dr_x.value), parseInt(f.dr_y.value), parseInt(f.dr_w.value), parseInt(f.dr_h.value));
    else if(shape=="fillRect()")
        jg2.fillRect(parseInt(f.fr_x.value), parseInt(f.fr_y.value), parseInt(f.fr_w.value), parseInt(f.fr_h.value));
    else if(shape=="drawEllipse()")
        jg2.drawEllipse(parseInt(f.do_x.value), parseInt(f.do_y.value), parseInt(f.do_w.value), parseInt(f.do_h.value));
    else if(shape=="fillEllipse()")
        jg2.fillEllipse(parseInt(f.fo_x.value), parseInt(f.fo_y.value), parseInt(f.fo_w.value), parseInt(f.fo_h.value));
    else if(shape=="fillArc()")
        jg2.fillArc(parseInt(f.fa_x.value), parseInt(f.fa_y.value), parseInt(f.fa_w.value), parseInt(f.fa_h.value), parseFloat(f.fa_angA.value.replace(/,/, ".")), parseFloat(f.fa_angZ.value.replace(/,/, ".")));
    else if(shape=="fillPolygon()")
    {
        var pgx = f.fp_x.value.split(',');
        var pgy = f.fp_y.value.split(',');
        var comm = '\n \nNebenbei:\nDie einzelnen Werte mssen mit Kommata voneinander abgetrennt sein.';
        if (pgx.length!=pgy.length) alert('Die Zahl der x- und y-Werte muss identisch sein.'+comm);
        else
        {
            for (var z = 0; z<pgx.length; z++)
            {
                if (isNaN(pgx[z] = parseInt(pgx[z])) || isNaN(pgy[z] = parseInt(pgy[z])))
                {
                    alert('Ungltiger x- oder y-Wert eingegeben.'+comm);
                    return;
                }
            }
            jg2.fillPolygon(pgx, pgy);
        }
    }
    jg2.paint();
    var t1 = (new Date()).getTime() - t0;
    jg3.clear();
    jg3.setColor('#'+color);
    jg3.setFont('verdana,geneva,sans-serif', '12px', Font.BOLD);
    jg3.drawString(t1 + ' milliseconds', 0, 10);

    jg3.paint();
}

var jg2=new jsGraphics("test");
var jg3 = new jsGraphics("dt");


function D()
{
    var wc = (window.innerWidth? innerWidth
        : (document.documentElement && document.documentElement.clientWidth)? document.documentElement.clientWidth
        : (document.body && document.body.clientWidth)? document.body.clientWidth
        : document.getElementsByTagName? document.getElementsByTagName('body')[0].offsetWidth
        : 800) >>1;
    var dy = no_dhtm? 115 : 0;


    var jg = new jsGraphics(no_dhtm? null : "main");

    jg.setColor("#ff9900");
    jg.drawEllipse(16, 240+dy, 59, 130);
    jg.setFont("arial,helvetica,sans-serif", "11px", Font.PLAIN);
    jg.drawString("<nobr>.drawEllipse(&nbsp;)<\/nobr>",35, 180+dy);
    jg.drawString(".fillPolygon(&nbsp;)", 360, 66+dy);
    jg.drawLine(62, 197+dy, 48, 234+dy);
    jg.drawLine(48, 234+dy, 45, 224+dy);
    jg.drawLine(49, 234+dy, 57, 228+dy);
    jg.setColor("#008800");
    jg.drawOval((250+wc+300)>>1, 4+dy, 64, 64);
    jg.drawString("These are not image files.<br>Shapes &amp; text have been dynamically drawn with wz_jsgraphics.js.", ((wc+280)>>1)-100, 190+dy);

    jg.setStroke(2);
    jg.setColor("#ff99b6");
    jg.drawLine(120, -60+dy, 265, 150+dy);
    jg.setColor("#ff0080");
    jg.setStroke(1);
    jg.drawString("<nobr>.drawLine(&nbsp;)<\/nobr>", 190, 145+dy);
    var polylx=new Array(420, ((wc+280)>>1)+240, ((wc+280)>>1)+120, (wc<<1)-100);
    var polyly=new Array(160+dy, 112+dy, 350+dy, 450+dy);
    jg.drawPolyline(polylx, polyly);
    jg.drawString(".drawPolyline(&nbsp;)", ((wc+280)>>1)+126, 155+dy);

    jg.setColor("#ffe600");
    jg.fillPolygon(new Array(383, 390, 397, 420, 397, 390, 383, 360), new Array(23+dy, 0+dy, 23+dy, 30+dy, 37+dy, 60+dy, 37+dy, 30+dy));

    var polygx=new Array(177, 247, 115);
    var polygy=new Array(24+dy, 45+dy, 140+dy);
    jg.setColor("#0000cc");
    jg.drawPolygon(polygx, polygy);
    jg.drawString(".drawPolygon(&nbsp;)", 256, 30+dy);

    jg.setColor("#aabbff");
    jg.setStroke(5);
    jg.drawOval(300, 110+dy, 80, 50);

    // Smiley
    jg.fillOval(wc+292, 36+dy, 15, 15);
    jg.setColor("#990099");
    jg.setStroke(Stroke.DOTTED);
    jg.drawRect(wc+280, dy, 40, 50);
    jg.drawString("<nobr>.drawRect(&nbsp;)<\/nobr>", wc+210, 20+dy);
    jg.setStroke(1);
    jg.drawOval(wc+292, 36+dy, 14, 14);
    jg.setColor("#000033");
    jg.fillRect(wc+295, 41+dy, 2, 2);
    jg.fillRect(wc+302, 41+dy, 2, 2);
    jg.drawLine(wc+295, 45+dy, wc+296, 46+dy);
    jg.drawLine(wc+297, 47+dy, wc+301, 47+dy);
    jg.drawLine(wc+301, 47+dy, wc+303, 45+dy);
    jg.setColor("#0000cc");
    jg.drawString(".fillEllipse(&nbsp;)", wc+214, 36+dy);

    // Pie
    jg.setColor("#0000ff");
    jg.drawString(".fillArc(&nbsp;)", wc+240, 120+dy);
    jg.setColor("#999999");
    jg.fillOval(wc+210, 150+dy, 120, 80);
    jg.setColor("#ff8080");
    jg.fillArc(wc+210, 140+dy, 120, 80, 330, 40);
    jg.setColor("#8080ff");
    jg.fillArc(wc+210, 140+dy, 120, 80, 40, 140);
    jg.setColor("#ff80ff");
    jg.fillArc(wc+210, 140+dy, 120, 80, 140, 180);
    jg.setColor("#80bb80");
    jg.fillArc(wc+210, 140+dy, 120, 80, 180, 280);
    jg.setColor("#ffcc66");
    jg.fillArc(wc+210, 140+dy, 120, 80, 280, 330);

    jg.paint();
}



if(document.all && !document.getElementById)
{
    window.onload = function()
    {
        window.setTimeout("D();", 100);
    }
}
else D();
</script>
</body>
</html>
