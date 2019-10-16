#if
a = 20
if a > 10
    puts " a lớn hơn 10 " 
end

#if .. else
b = 4
if b > 5
	puts " b lớn hơn 5"
else 
	puts " b nhỏ hơn 5"
end

# case
puts "Nhập công cụ bạn sử dụng : "
site =  gets.chomp
case site
when "Google"
    puts "Trang tìm kiếm"
when "Facebook"
    puts "Trang mạng xã hội"
when "Youtube"
    puts "Trang chia sẻ video clip"
when "SlideShare"
    puts "Trang chia sẻ slide"
else
    puts "Website khác"
end

#while
i = 0
sum = 0
while i < 10  do
	i = i + 1
	sum = sum + i
end
puts "The sum of 0..9 values is #{sum}"


# while
counter = 0
while counter < 5 do
   puts "Giá trị của biến counter là: #{counter}"
   counter +=1 # tăng giá trị của counter 1 đơn vị
end

#for
for i in 0..5
	puts " giá trị của biến i là : #{i}}"
end

#break 
while true
	r = 1 + rand(10)
	puts "#{r}"
	if r == 3
		break
	end
end
 
#next 
for i in 0..9 do
	if i == 3
		next
	end
	puts "#{i}"
end

#until
counter = 0

until counter > 5  do
   puts("Giá trị của biến counter là #{counter += 1}" )
end

#each 
planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter","Saturn", "Uranus", "Neptune"]
planets.each do |planet| 
	puts planet
end


