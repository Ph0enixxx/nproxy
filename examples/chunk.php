<?php
	header("Transfer-Encoding: chunked");
	header("Content-Type: text/html");
	flush();
	dump_chunk("<html>");
	dump_chunk("<head>");
	dump_chunk("<script src='chunk.js'></script>");
	dump_chunk("</head>");
	dump_chunk("<body>");
	dump_chunk("<script>");
	dump_chunk("/*need rewrite*/\ndocument");
	dump_chunk(".w");
	dump_chunk("rite('document.write chunk suc!');\n\n");
	
	dump_chunk("/*Dont need rewrite*/\nfunction ww(){\nvar tt = new Ext.cookie(1,{\n");
	dump_chunk("duration:-1}).write('');\n};");
	dump_chunk("\nww();</script>");
	
    dump_chunk("\n<div id=\"output\">");
    dump_chunk("</div>\n");
    dump_chunk("<script>\n");
    dump_chunk("//���Ե�1��document.write\n");
    dump_chunk("document.write(\"<a href='http://g.cn'>");
	dump_chunk("���Ե�1��document.write</a>\");\n");
    dump_chunk("</script>\n");


    dump_chunk("<script>\n");
    dump_chunk("//���Ե�2��document.writeln\n");
    dump_chunk("document.writeln(\"<a href='http://g.cn'>���Ե�1��document.writeln</a>\");\n");
    dump_chunk("</script>\n");

    dump_chunk("<script>\n");
    dump_chunk("//���Ե�3��innerHTML\n");
    dump_chunk("document.getElementById(\"output\").");
	dump_chunk("innerHTML = (\"<a href='http://g.cn'>���Ե�2��innerHTML</a>\");\n");
    dump_chunk("</script>\n");

    dump_chunk("<script>\n");
    dump_chunk("//���Ե�4��innerHTML+=\n");
    dump_chunk("document.getElementById(\"output\").innerHTML += ");
	dump_chunk("(\"<a href='http://g.cn'>���Ե�3��innerHTML</a>\");\n");
    dump_chunk("</script>\n");

    dump_chunk("<script>\n");
    dump_chunk("//���Ե�5��eval\n");
    dump_chunk("function test_eval()\n");
    dump_chunk("{\nvar evalTxt = \"window.open(");
	dump_chunk("'http://g.cn/test_5')\";\n");
    dump_chunk("eval(evalT");
	dump_chunk("xt);\n}\n");
    dump_chunk("</script>\n");

    dump_chunk("<script>\n");
    dump_chunk("//���Ե�6��eval\nfunction test_funpt(");
	dump_chunk("){");
    dump_chunk("\n   var _open = window.open;\n_open(\"http://g.cn/test_6\");");
    dump_chunk("}\n</script>\n");

    dump_chunk("<script>\n//���Ե�7��JS�������ԡ�������д��\nvar obj = new ");
    dump_chunk("ActiveXObject(\"ObjectClass\");\nobj.Explore(\"http: ");
    dump_chunk("//g.cn\");\nobj.url = \"http://g.cn\";\n</script>");
	
	dump_chunk("</body>");
	dump_chunk("</html>");
	dump_chunk("");
	
	function dump_chunk($chunk)
	{
		echo sprintf("%x\r\n", strlen($chunk));
		echo $chunk;
		echo "\r\n";
	}

?>