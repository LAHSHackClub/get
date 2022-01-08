
export async function post(req) {
	const par = req.body;

	const body = {
    "text": `${par.get("name")} submitted a help request.`,
    "blocks": [
    	{
    		"type": "section",
    		"text": {
    			"type": "mrkdwn",
    			"text": `*New help request:*`
    		}
    	},
    	{
    		"type": "section",
    		"fields": [
    			{
    				"type": "mrkdwn",
    				"text": `*Name*\n${par.get("name")}`
    			},
    			{
    				"type": "mrkdwn",
    				"text": `*Email*\n${par.get("email")}`
    			}
    		]
    	},
    	{
    		"type": "section",
    		"fields": [
    			{
    				"type": "mrkdwn",
    				"text": `*Organization*\n${par.get("club")}`
    			},
    			{
    				"type": "mrkdwn",
    				"text": `*Role*\n${par.get("role")}`
    			}
    		]
    	},
    	{
    		"type": "section",
    		"text": {
    			"type": "mrkdwn",
    			"text": par.get("req")
    		}
    	}
    ]
}

	await fetch(import.meta.env.VITE_SLACK_WEBHOOK as string,
		{ method: "POST", body: JSON.stringify(body) });

	return {
		status: 302,
		headers: {
			"Location": "/success"
		}
	}
}