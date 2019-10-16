numbers = [1,2,3,4,5,6,7]
puts numbers[0] # hien thi 1
puts numbers[4] # hien thi 5
puts numbers[-1] # hien thi phan tu cuoi mang
puts numbers[2, 3].to_s # tu phan tu thu 2 lay 3 gia tri : [3,4,5]
puts numbers[1..3].to_s # hien thi tu 1 den 3 : [2,3,4]
puts numbers.include?(8) # kiem tra mang co gia tri 8 hay ko false