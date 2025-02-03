<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lokasi</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-200 flex flex-col items-center justify-center min-h-screen">
    <div class="text-center space-y-4">
        <div class="flex justify-center items-center space-x-2">
            <span>-</span>
            <div class="flex flex-col items-center">
                <input type="text" class="border border-black w-20 h-8 text-center" id="input1">
                <span class="w-20 text-center">0110</span>
                <span id="result1" class="w-20 text-center"></span>
            </div>
            <span>.</span>
            <div class="flex flex-col items-center">
                <input type="text" class="border border-black w-20 h-8 text-center" id="input2">
                <span class="w-20 text-center">1000</span>
                <span id="result2" class="w-20 text-center"></span>
            </div>
            <div class="flex flex-col items-center">
                <input type="text" class="border border-black w-20 h-8 text-center" id="input3">
                <span class="w-20 text-center">1001</span>
                <span id="result3" class="w-20 text-center"></span>
            </div>
            <div class="flex flex-col items-center">
                <input type="text" class="border border-black w-20 h-8 text-center" id="input4">
                <span class="w-20 text-center">0110</span>
                <span id="result4" class="w-20 text-center"></span>
            </div>
            <div class="flex flex-col items-center">
                <input type="text" class="border border-black w-20 h-8 text-center" id="input5">
                <span class="w-20 text-center">1000</span>
                <span id="result5" class="w-20 text-center"></span>
            </div>
            <div class="flex flex-col items-center">
                <input type="text" class="border border-black w-20 h-8 text-center" id="input6">
                <span class="w-20 text-center">1001</span>
                <span id="result6" class="w-20 text-center"></span>
            </div>
            <span>,</span>
        </div>
        <div class="flex justify-center items-center space-x-2">
            <div class="flex flex-col items-center">
                <input type="text" class="border border-black w-20 h-8 text-center" id="input7">
                <span class="w-20 text-center">0001</span>
                <span id="result7" class="w-20 text-center"></span>
            </div>
            <div class="flex flex-col items-center">
                <input type="text" class="border border-black w-20 h-8 text-center" id="input8">
                <span class="w-20 text-center">0000</span>
                <span id="result8" class="w-20 text-center"></span>
            </div>
            <div class="flex flex-col items-center">
                <input type="text" class="border border-black w-20 h-8 text-center" id="input9">
                <span class="w-20 text-center">0111</span>
                <span id="result9" class="w-20 text-center"></span>
            </div>
            <span>.</span>
            <div class="flex flex-col items-center">
                <input type="text" class="border border-black w-20 h-8 text-center" id="input10">
                <span class="w-20 text-center">0101</span>
                <span id="result10" class="w-20 text-center"></span>
            </div>
            <div class="flex flex-col items-center">
                <input type="text" class="border border-black w-20 h-8 text-center" id="input11">
                <span class="w-20 text-center">0100</span>
                <span id="result11" class="w-20 text-center"></span>
            </div>
            <div class="flex flex-col items-center">
                <input type="text" class="border border-black w-20 h-8 text-center" id="input12">
                <span class="w-20 text-center">0010</span>
                <span id="result12" class="w-20 text-center"></span>
            </div>
            <div class="flex flex-col items-center">
                <input type="text" class="border border-black w-20 h-8 text-center" id="input13">
                <span class="w-20 text-center">0101</span>
                <span id="result13" class="w-20 text-center"></span>
            </div>
        </div>
        <div class="flex justify-center items-center space-x-2">
            <div class="flex flex-col items-center">
                <input type="text" class="border border-black w-20 h-8 text-center" id="input14">
                <span class="w-20 text-center">0010</span>
                <span id="result14" class="w-20 text-center"></span>
            </div>
        </div>
        <a href="https://www.google.com/maps" target="_blank" class="text-blue-600">Mari Lihat Lokasinya</a>
        <button onclick="checkBinary()" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded">Cek Jawaban</button>
        <textarea id="copiedData" class="border mt-4 p-2 w-full"></textarea>
    </div>

    <script>
        function checkBinary() {
            const correctBinaries = ["0110", "1000", "1001", "0110", "1000", "1001", "0001", "0000", "0111", "0101", "0100", "0010", "0101", "0010"];
            const correctDecimals = correctBinaries.map(bin => parseInt(bin, 2));
            const symbols = ["-", ".", "", "", "", "", ",", "", "", ".", "", "", "", ""]; // Simbol sesuai urutan
            const inputs = [
                document.getElementById('input1').value,
                document.getElementById('input2').value,
                document.getElementById('input3').value,
                document.getElementById('input4').value,
                document.getElementById('input5').value,
                document.getElementById('input6').value,
                document.getElementById('input7').value,
                document.getElementById('input8').value,
                document.getElementById('input9').value,
                document.getElementById('input10').value,
                document.getElementById('input11').value,
                document.getElementById('input12').value,
                document.getElementById('input13').value,
                document.getElementById('input14').value
            ];

            let resultText = ''; // Hanya desimal dan simbol

            for (let i = 0; i < inputs.length; i++) {
                const resultElement = document.getElementById(`result${i + 1}`);
                const decimal = parseInt(inputs[i]);
                const correctDecimal = correctDecimals[i];
                if (decimal === correctDecimal) {
                    resultElement.textContent = "Benar";
                    resultElement.classList.add("text-green-500");
                    resultElement.classList.remove("text-red-500");
                    resultText += `${symbols[i]} ${correctDecimal} `;
                } else {
                    resultElement.textContent = "Salah";
                    resultElement.classList.add("text-red-500");
                    resultElement.classList.remove("text-green-500");
                }
            }
            document.getElementById('copiedData').value = resultText.trim();
        }
    </script>

</body>
</html>
