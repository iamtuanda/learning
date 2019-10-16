hash = {"color" => "Green", "number" => 100, 0 => "Blue"}
puts "#{hash['color']}" # hiển thị: Green
puts "#{hash['number']}" # hiển thị: 100
puts "#{hash[0]}" # hiển thị: Blue


puts hash["color"]

hash = { color: "Black", number: 100}
puts hash[:color]



hash = { :color => "Blue", :number => 100}
puts hash[:color]