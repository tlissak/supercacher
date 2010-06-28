{* Smarty *}

{* debug.tpl, last updated version 2.0.1 *}

{assign_debug_info}

{if isset($_smarty_debug_output) and $_smarty_debug_output eq "html"}
<!--  <table border=0 width='100%'>
        <tr bgcolor=#cccccc><th colspan=2>Smarty Debug Console</th></tr>
        <tr bgcolor=#cccccc><td colspan=2><b>included templates & config files (load time in seconds):</b></td></tr>
        {section name=templates loop=$_debug_tpls}
                <tr bgcolor={if %templates.index% is even}#eeeeee{else}#fafafa{/if}><td colspan=2>{section name=indent loop=$_debug_tpls[templates].depth}&nbsp;&nbsp;&nbsp;{/section}<font color={if $_debug_tpls[templates].type eq "template"}brown{elseif $_debug_tpls[templates].type eq "insert"}black{else}green{/if}>{$_debug_tpls[templates].filename|escape:html}</font>{if isset($_debug_tpls[templates].exec_time)} <font size=-1><i>({$_debug_tpls[templates].exec_time|string_format:"%.5f"}){if %templates.index% eq 0} (total){/if}</i></font>{/if}</td></tr>
        {sectionelse}
                <tr bgcolor=#eeeeee><td colspan=2><i>no templates included</i></td></tr>       
        {/section}
        <tr bgcolor=#cccccc><td colspan=2><b>assigned template variables:</b></td></tr>
        {section name=vars loop=$_debug_keys}
                <tr bgcolor={if %vars.index% is even}#eeeeee{else}#fafafa{/if}><td valign=top><font color=blue>{ldelim}${$_debug_keys[vars]}{rdelim}</font></td><td nowrap><font color=green>{$_debug_vals[vars]|@debug_print_var}</font></td></tr>
        {sectionelse}
                <tr bgcolor=#eeeeee><td colspan=2><i>no template variables assigned</i></td></tr>      
        {/section}
        <tr bgcolor=#cccccc><td colspan=2><b>assigned config file variables (outer template scope):</b></td></tr>
        {section name=config_vars loop=$_debug_config_keys}
                <tr bgcolor={if %config_vars.index% is even}#eeeeee{else}#fafafa{/if}><td valign=top><font color=maroon>{ldelim}#{$_debug_config_keys[config_vars]}#{rdelim}</font></td><td><font color=green>{$_debug_config_vals[config_vars]|@debug_print_var}</font></td></tr>
        {sectionelse}
                <tr bgcolor=#eeeeee><td colspan=2><i>no config vars assigned</i></td></tr>     
        {/section}
        </table>
</BODY></HTML>
-->
{else}

<SCRIPT language=javascript>
        if( self.name == '' ) {ldelim}
           var title = 'Console';
        {rdelim}
        else {ldelim}
           var title = 'Console_' + self.name;
        {rdelim}
        _smarty_console = window.open("",title.value,"width=680,height=600,resizable,scrollbars=yes");
        _smarty_console.document.write("<HTML><TITLE>Smarty Debug Console_"+self.name+"</TITLE><BODY bgcolor=#ffffff>");
        _smarty_console.document.write("<table border=0 width='100%'>");
        _smarty_console.document.write("<tr bgcolor=#cccccc><th colspan=2>Smarty Debug Console</th></tr>");
        _smarty_console.document.write("<tr bgcolor=#cccccc><td colspan=2><b>included templates & config files (load time in seconds):</b></td></tr>");
        {section name=templates loop=$_debug_tpls}
                _smarty_console.document.write("<tr bgcolor={if %templates.index% is even}#eeeeee{else}#fafafa{/if}><td colspan=2>{section name=indent loop=$_debug_tpls[templates].depth}&nbsp;&nbsp;&nbsp;{/section}<font color={if $_debug_tpls[templates].type eq "template"}brown{elseif $_debug_tpls[templates].type eq "insert"}black{else}green{/if}>{$_debug_tpls[templates].filename|escape:html|escape:javascript}</font>{if isset($_debug_tpls[templates].exec_time)} <font size=-1><i>({$_debug_tpls[templates].exec_time|string_format:"%.5f"}){if %templates.index% eq 0} (total){/if}</i></font>{/if}</td></tr>");
        {sectionelse}
                _smarty_console.document.write("<tr bgcolor=#eeeeee><td colspan=2><i>no templates included</i></td></tr>");    
        {/section}
        _smarty_console.document.write("<tr bgcolor=#cccccc><td colspan=2><b>assigned template variables:</b></td></tr>");
        {section name=vars loop=$_debug_keys}
                _smarty_console.document.write("<tr bgcolor={if %vars.index% is even}#eeeeee{else}#fafafa{/if}><td valign=top><font onclick='document.getElementById(\"idx_{%vars.index%}\").style.height=\"\";' color=blue>{%vars.index%}{ldelim}${$_debug_keys[vars]}{rdelim}</font></td><td nowrap><div style='height:22px;overflow:hidden' id='idx_{%vars.index%}'><font color=green>{$_debug_vals[vars]|@debug_print_var|escape:javascript}</font></div></td></tr>");
        {sectionelse}
                _smarty_console.document.write("<tr bgcolor=#eeeeee><td colspan=2><i>no template variables assigned</i></td></tr>");   
        {/section}
        _smarty_console.document.write("<tr bgcolor=#cccccc><td colspan=2><b>assigned config file variables (outer template scope):</b></td></tr>");
        {section name=config_vars loop=$_debug_config_keys}
                _smarty_console.document.write("<tr bgcolor={if %config_vars.index% is even}#eeeeee{else}#fafafa{/if}><td valign=top><font color=maroon>{ldelim}#{$_debug_config_keys[config_vars]}#{rdelim}</font></td><td><font color=green>{$_debug_config_vals[config_vars]|@debug_print_var|escape:javascript}</font></td></tr>");
        {sectionelse}
                _smarty_console.document.write("<tr bgcolor=#eeeeee><td colspan=2><i>no config vars assigned</i></td></tr>");  
        {/section}
        _smarty_console.document.write("</table>");
        _smarty_console.document.write("</BODY></HTML>");
        _smarty_console.document.close();
</SCRIPT>

{/if}