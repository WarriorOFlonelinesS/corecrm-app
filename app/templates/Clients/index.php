<h1 class="cyber-header">Clients</h1>
<button class="cyber-btn my-4">
<a href="/clients/add"><i class="fa-solid fa-square-plus white" style="margin-right: 8px;"></i>
<span class="white">ADD RECORD</span></a>
</button>

<?php 
echo $this->cell('Clients::display');