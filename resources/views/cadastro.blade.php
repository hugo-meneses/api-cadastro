<h1>Filtro Funcionários</h1>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="funcionario">Funcionário</label>
      <input type="text" class="form-control" id="funcionario" placeholder="Nome do funcionário">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Cidade</label>
      <input type="text" class="form-control" id="cidade" placeholder="Cidade">
    </div>
  </div>
    <button type="submit" class="btn btn-primary" align="right">Filtro</button>
 </form> 

<table class="table table-hover table-striped   dataTable"> 
           
             <thead> 
                    <tr role="row">
                        <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Módulo" style="width: 50px;">ID</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Rota" style="width: 100px;">Nome</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Rota" style="width: 100px;">Cidade</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Rota" style="width: 200px;">País</th>
  
                    </tr>
             </thead>
            <tbody>
            
                <tr role="row" class="odd"  >
                    <td>1</td>
                    <td>Mendes Costa</td>
                    <td>Salvador</td>
                    <td>Brasil</td>
                </tr> 
                <tr>
                    <td>2</td>
                    <td>Silva Costa</td>
                    <td>Salvador</td>
                    <td>Brasil</td>
                </tr>  
</table>        
                                                
                          




<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>