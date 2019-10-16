#throw/catch
floors = 	[["first", "second", "third"],
			["fourth", "fifth", "sixth"],
			["seventh", "eighth", "ninth"]]
number = 0
floor = catch(:found) do
	floors.each do |row|
		row.each do |tile|
			number += 1
			throw(:found, tile) if tile.eql?"fifth"
		end
	end
end
puts floor
puts number
