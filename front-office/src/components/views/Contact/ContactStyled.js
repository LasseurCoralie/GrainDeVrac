import styled from 'styled-components';
import theme from '../../../theme/theme';

const ContactStyled = styled.div`
  margin: 0 1em;

  h3 {
    margin: 2em -1em;
    margin-bottom: 1em;
    text-align: center;
    text-transform: uppercase;
    font-weight: bold;
    color: white;
    padding: .5em;
    background-color: ${theme.colors.purple};
  }
`;

export default ContactStyled;