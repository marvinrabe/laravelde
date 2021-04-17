interface Meetup {
    url: string;
    title: string;
    members: number;
}

interface MeetupSectionProps {
    title: string;
    meetups: Meetup[]
}

export default function MeetupSection(props: MeetupSectionProps) {
    return (
        <>
            <h3 className="text-2xl my-6">{props.title}</h3>

            <div className="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                {props.meetups.map((meetup, index) => (
                    <a key={index} href={meetup.url} rel="noopener"
                       className="block p-4 border bg-white hover:bg-gray-50 rounded">
                        <span className="block font-bold">
                            {meetup.title}
                        </span>
                        <span className="block font-light text-xs text-gray-600">{meetup.members} Artisans</span>
                    </a>
                ))}
            </div>
        </>
    );
}
