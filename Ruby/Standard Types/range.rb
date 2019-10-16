range_1 = (1..7)
range_2 = (2...9)
range_3 = ("a".."f")
range_4 = [1, 2, 3, 4, 5, 6, 7, 8, 9]
puts range_1.to_a
puts range_2.to_a
puts range_3.to_a
puts range_4.min 
puts range_4.max
puts range_4.include? 5


range_5 = (1..10).to_a
range_6 = ("car".."cat").to_a
# hien thi mang array
puts "#{range_5}" # hiển thị: [1, 2, 3, 4, 5]
puts "#{range_6}" # hiển thị: [car, cas, cat]

