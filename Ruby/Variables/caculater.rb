puts ''' 
hihihihihihihi
1. cong
2. tru
3. thoat
'''

choice = gets.chomp

if choice == "1" 
	puts "thuc hien phep cong"
	puts "nhap phan tu dau tien"
	a = gets.chomp.to_f
	puts "nhap toan haong thu 2"
	b = gets.chomp.to_f
	puts "ket qua thuc hien la : %f"%(a+b)
elsif choice == "2"
    puts "thuc hien phep tru" 
else 
	puts " thoat chuong trinh"
end

