<?php







		include ('pdf/mpdf.php');

		$t = $_POST["titulo"];
		$n = $_POST["nome"];
		$i = $_POST["idade"];
		$a = $_POST["altura"];
		#$c = $_POST["cabelo"];


		$mpdf =  new mPDF();
		$mpdf ->allow_charset_conversion = true;
		$mpdf ->charset_in = 'UTF-8';
		$mpdf ->WriteHTML ('CADASTRO DE HUMANOS');
		$mpdf ->WriteHTML ('Nome:'.' '.$n);
		$mpdf ->WriteHTML ('Idade:'.' '.$i);
		#$mpdf ->WriteHTML ($n);
		$mpdf ->WriteHTML ('Altura:'.' '.$a);

# criar um mecanismo para inserir o logotipo na PDF ja gerada! xD até a proxima pessoal
		$mpdf->Output('cadastro_arquivo.pdf', 'I');
		exit();
?>
