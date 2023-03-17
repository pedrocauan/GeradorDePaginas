<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Gerador de Listas</title>
    <?php
    $semPaginas = true;
    $qntProd = (int) $_GET['qntProd'];
    $qntItem = (int) $_GET['qntItem'];
    $qntDesc = (int) $_GET['qntDesc'];
    
    if(!empty($_GET)) {
        $semPaginas = false;
    }   
    ?>
</head>

<body>
    // mostra o formulário caso nao haja paginas
    <?php if ($semPaginas) : ?>
        <form action="" method="GET" class="flex flex-col" >
            <div class="p-4" class="flex flex-col  p-4">
                <label class="block" for="qntProd">Quantidade de produtos:</label>
                <input class="border-2 p-1 border-black" type="text" name="qntProd" id="qntProd">
            </div>

            <div class="p-4">
                <label class="block" for="qntProd">Quantidade de itens:</label>
                <input class="border-2 p-1 border-black" type="text" name="qntItem" id="qntItem">
            </div>

            <div class="p-4">
                <label class="block" for="qntProd">Quantidade de descrições:</label>
                <input class="border-2 p-1 border-black" type="text" name="qntDesc" id="qntDesc">
            </div>
            <div class="p-4">
                <button class="bg-yellow-500 p-4 text-stone-800 font-bold">Enviar</button>

            </div>

        </form>
    <?php endif; ?>


    <?php for ($i = 0; $i < $qntProd; $i++) : ?>

        <ul class="bg-stone-800 p-4 text-neutral-200 h-screen">
            <li>
                <h2 class="text-3xl text-yellow-300 mb-3 text-center uppercase tracking-wider p-4 bg-stone-900">Produto <?php echo $i + 1 ?></h2>
                <?php for ($j = 0; $j < $qntItem; $j++) : ?>
                    <ul class="bg-stone-600 p-2">
                        <li class="text-2xl p-2 text-yellow-500">
                            <h2 class="mb-3">item <?php echo $j + 1 ?></h2>
                            <?php for ($k = 0; $k < $qntDesc; $k++) : ?>
                                <ul class="bg-stone-500 p-2">
                                    <li class="text-xl text-yellow-200 p-2">descrição <?php echo $k + 1 ?></li>
                                </ul>

                            <?php endfor; ?>
                        </li>
                    </ul>
                <?php endfor; ?>

            </li>
        </ul>

    <?php endfor; ?>

</body>

</html>