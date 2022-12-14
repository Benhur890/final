        
        
        
        <?php $query = "SELECT 'pontuacao' FROM usuario"; 
                $result_query = mysql_query( $query ) or die(' Erro na query:' . $query . ' ' . mysql_error() );
  
                while ($row = mysql_fetch_array( $result_query )) 
                { 
                    print $row[1]; 
                }

              ?>