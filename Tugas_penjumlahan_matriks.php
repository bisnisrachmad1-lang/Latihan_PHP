<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penjumlahan Matriks 3x3</title>
    <style>
        body { font-family: sans-serif; }
        .matriks-container { display: flex; align-items: center; font-size: 1.2em; }
        .matriks { border-left: 2px solid black; border-right: 2px solid black; padding: 10px; margin: 10px; }
        .operator { font-size: 2em; margin: 10px; }
        table { border-collapse: collapse; }
        td { padding: 8px; text-align: center; }
    </style>
</head>
<body>

    <h2>Program Penjumlahan Matriks 3x3 dengan PHP</h2>

    <div class="matriks-container">
        <div>
            <h4>Matriks A</h4>
            <div class='matriks'>
                <table>
                    <tr>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>2</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>3</td>
                        <td>3</td>
                    </tr>
                </table>
            </div>
        </div>
        
        <div class="operator">+</div>
        
        <div>
            <h4>Matriks B</h4>
            <div class='matriks'>
                <table>
                    <tr>
                        <td>3</td>
                        <td>3</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>2</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                    </tr>
                </table>
            </div>
        </div>
        
        <div class="operator">=</div>

        <div>
            <h4>Hasil Penjumlahan</h4>
            <div class='matriks'>
                <table>
                    <tr>
                        <td>4</td>
                        <td>4</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>4</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>4</td>
                        <td>4</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

</body>
</html>