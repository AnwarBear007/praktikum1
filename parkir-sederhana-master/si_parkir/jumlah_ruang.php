<?php
include 'koneksi.php';
include 'home.php';
?>
<body>
<main class="app-content">    
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="panel-heading">
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="sampleTable">

							<tr>
								<th>Ruang Tersisa</th>
								<td><?php
									$data = $koneksi->query("SELECT ruang_parkir, COUNT(*) AS ruang_parkir
									FROM tb_parkir where status like '%0%' 
									GROUP BY status ");
									while($d = mysqli_fetch_array($data)){
							 			echo $d['ruang_parkir']; 			
							 		?>
							 	</td>
							</tr>
							<tr><th>Ruang Terisi</th>
								<td><?php
										$dataa = $koneksi->query("SELECT ruang_parkir, COUNT(*) AS ruang_parkir
										FROM tb_parkir where status like '%1%' 
										GROUP BY status ");
										while($dt = mysqli_fetch_array($dataa)){
								 			echo $dt['ruang_parkir']; 
								 	?>	
								 </td>
							</tr>
							<tr>
								<th>Jumlah Total</th>
								<td><?php
										$dataparkir = $d['ruang_parkir'];
										$datasisa = $dt['ruang_parkir'];
										
											$hasil=$dataparkir+$datasisa;
								 			echo $hasil;
								 		}
								 	}
								
								 		?>	
								 </td>
							</tr>

						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
</body>
</body>