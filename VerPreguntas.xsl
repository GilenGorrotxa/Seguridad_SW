

<?xml-stylesheet type="text/xsl" href="tabla.xsl"?>
<xsl:template match="/">
<html>
<body>
 
  <h2>Preguntas</h2>
    <table border="1">
      <tr bgcolor="skyblue">
        <th>Pregunta</th>
        <th>Respuesta Correcta</th>
      </tr>

     <xsl:for-each select="assessmentItems/assessmentItem">
  		<tr>
    <td><xsl:value-of select="itemBody"/></td>
    <td><xsl:value-of select="correctResponse"/></td>
  </tr>
</xsl:for-each>
 </table>
   </body>
   </html>
</xsl:template>