=begin
Citrons provided this pseudocode (more or less paraphrased)
for (i = 0; i < len(members); i++ ) {
	prev = clamp(i--, len(members))
	next = clamp(i++, len(members))
	write to 'ring/{member}.html'
	write <a href='members[next].url'>next</a>
	write <a href='members[prev].url'>prev</a>
}
=end

module RingPlugin
	class Generator < Jekyll::Generator
		safe true
		priority :normal

		def generate(site)
			members = site.data["ringmembers"]
			members.each_with_index do |member,index|
				prev_member = (index - 1) % members.length()
				next_member = (index + 1) % members.length()
				rand_member = rand(0..member.length())
			end
		end
	end
end
