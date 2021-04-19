import Image from 'next/image'
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome'
import { faYoutube } from '@fortawesome/free-brands-svg-icons'

interface Talk {
  title: string;
  date: string;
  twitter: string;
  name: string;
}

interface Meetup {
  date: string;
  url: string;
}

interface PastMeetupProps {
  talks: Talk[],
  meetup: Meetup
}

export default function PastMeetup (props: PastMeetupProps) {
  const talks = props.talks.filter((talk) => talk.date === props.meetup.date)

  return (
    <div className="border border-gray-200 rounded mb-6">
      <div
        className="flex flex-col md:flex-row items-center md:justify-between px-6 py-3 bg-gray-50 border-b border-gray-200 rounded-t">
        <div className="text-lg font-bold text-gray-800 my-2 md:my-0">
          {new Intl.DateTimeFormat('de-DE', {
            dateStyle: 'long'
          }).format(new Date(props.meetup.date))}
        </div>

        <a href={props.meetup.url} rel="noopener" className="button-red">
          <FontAwesomeIcon icon={faYoutube} className="mr-2"/>
          Auf YouTube ansehen
        </a>
      </div>
      <div className="px-6 py-3">
        {talks.map((talk, index) => (
          <div key={index} className="flex items-center my-6">
            <Image
              src={`https://res.cloudinary.com/laravelphpde/image/twitter_name/${talk.twitter}.jpg`}
              className="rounded-full shadow-lg h-12 w-12 outline-none flex-shrink-0"
              height={50}
              width={50}
            />
            <div className="ml-4 leading-relaxed">
              <a href={`https://twitter.com/${talk.twitter}`} className="font-bold" rel="noopener">{talk.name}</a><br/>
              <span className="font-medium text-gray-600">{talk.title}</span>
            </div>
          </div>
        ))}
      </div>
    </div>
  )
}
