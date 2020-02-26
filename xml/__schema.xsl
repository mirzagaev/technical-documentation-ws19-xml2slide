<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <DOCUMENT>
            <xsl:for-each select="DOCUMENT/PAGE">
                <PAGE></PAGE>
            </xsl:for-each>
        </DOCUMENT>
    </xsl:template>
</xsl:stylesheet>