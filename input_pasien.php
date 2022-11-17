<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diana Ayu Rosalina | Input Pasien</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="overflow-hidden">
    <div class="min-h-screen py-8 bg-purple-400 flex justify-center items-center">
        <div class="absolute w-60 h-60 rounded-xl bg-purple-300 -top-5 -left-16 z-0 transform rotate-45 hidden md:block">
        </div>
        <div class="absolute w-48 h-48 rounded-xl bg-purple-300 -bottom-6 -right-10 transform rotate-12 hidden md:block">
        </div>
        <div class="flex flex-col items-center">
            <center>
                <img width="1023" height="120" src="header.png" />
            </center>
            <div class="py-12 w-full px-12 bg-white rounded-2xl shadow-xl z-20">
                <div class="text-center">
                    <h1 class="text-3xl font-bold text-center mb-4 cursor-pointer">ANALISIS KODIFIKASI ELEKTRONIS</h1>
                    <p class="mx-auto w-80 text-sm mb-8 font-semibold text-gray-700 tracking-wide cursor-pointer">FORM INPUT DATA PASIEN</p>
                </div>
                <div class="space-y-4">
                    <form action="simpan_pasien.php" method="POST">
                        <div class="flex justify-between">
                            <div class="-mx-3 w-1/2 flex flex-wrap">
                                <div class="w-full px-3">
                                    <div class="mb-5">
                                        <label for="no" class="mb-3 block text-base font-medium text-[#07074D]">
                                            Nomor Pasien
                                        </label>
                                        <input type="text" name="no" id="no" placeholder="Nomor Pasien" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                    </div>
                                </div>
                            </div>
                            <div class="-mx-3 w-1/2 flex flex-wrap">
                                <div class="w-full px-3">
                                    <div class="mb-5">
                                        <label for="nama" class="mb-3 block text-base font-medium text-[#07074D]">
                                            Nama Pasien
                                        </label>
                                        <input type="text" name="nama" id="nama" placeholder="Nama Pasien" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="-mx-3 flex flex-wrap">
                            <div class="w-full px-3">
                                <div class="mb-5">
                                    <label for="alamat" class="mb-3 block text-base font-medium text-[#07074D]">
                                        Alamat Pasien
                                    </label>
                                    <textarea class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" name="alamat" rows=5 cols=40></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="mb-5">
                            <label class="mb-3 block text-base font-medium text-[#07074D]">
                                Jenis Kelamin
                            </label>
                            <div class="flex items-center space-x-6">
                                <div class="flex items-center">
                                    <input type="radio" name="kelamin" id="kelamin1" value="L" class="h-5 w-5" />
                                    <label for="kelamin1" class="pl-3 text-base font-medium text-[#07074D]">
                                        Laki-Laki
                                    </label>
                                </div>
                                <div class="flex items-center">
                                    <input type="radio" name="kelamin" id="kelamin2" value="P" class="h-5 w-5" />
                                    <label for="kelamin2" class="pl-3 text-base font-medium text-[#07074D]">
                                        Perempuan
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-between">
                            <div class="-mx-3 w-1/2 flex flex-wrap">
                                <div class="w-full px-3">
                                    <div class="mb-5">
                                        <label for="date" class="mb-3 block text-base font-medium text-[#07074D]">
                                            Pekerjaan
                                        </label>
                                        <select name="pekerjaan" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                                            <option selected>-- Pilihan --</option>
                                            <option value="Wiraswasta">Wiraswasta</option>
                                            <option value="PNS">PNS</option>
                                            <option value="TNI-POLRI">TNI-POLRI</option>
                                            <option value="Swasta">Swasta</option>
                                            <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="-mx-3 w-1/2 flex flex-wrap">
                                <div class="w-full px-3">
                                    <div class="mb-5">
                                        <label for="time" class="mb-3 block text-base font-medium text-[#07074D]">
                                            Umur Pasien
                                        </label>
                                        <input type="text" name="umur" id="umur" placeholder="Umur Pasien" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-end">
                            <button type="submit" value="Simpan" class="mr-2 hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                                Submit
                            </button>
                            <button type="reset" value="Batal" class="hover:shadow-form rounded-md border-2 hover:bg-[#6A64F1] hover:text-white border-[#6A64F1 bg-[#ffff] py-3 px-8 text-center text-base font-semibold outline-none">
                                Batal
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="w-40 h-40 absolute bg-purple-300 rounded-full top-0 right-12 hidden md:block"></div>
        <div class="w-20 h-40 absolute bg-purple-300 rounded-full bottom-20 left-10 transform rotate-45 hidden md:block">
        </div>
    </div>

</body>

</html>