class String
	def upcase
		self.reverse
	end
end
puts "Tmh Techlab".upcase
class SpaceShip
	def batten_hatches
		puts "Batten the hatches!"
	end
end
ship = SpaceShip.new
class SpaceShip
	private 
	def batten_hatches
		puts "Avast!"
	end
end

ship.batten_hatches #error private method
